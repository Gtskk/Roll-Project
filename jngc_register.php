<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

$status = '';
$result = array();

//Forms posted
if(!empty($_POST))
{
	$username = trim($_POST["username"]);
	$telephone = trim($_POST["telephone"]);
	$captcha = md5($_POST["captcha"]);
	
	
	if ($captcha != $_SESSION['captcha'])
	{
		$status = lang("CAPTCHA_FAIL");
		$result['status'] = $status;
		die(json_encode($result));
	}/*
	if(!preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/",$phone)){
		$errors[] = lang("ACCOUNT_INVALID_PHONE");
	}*/
	//End data validation
	
	global $mysqli,$db_table_prefix;
	//保存用户
	$stmt = $mysqli->prepare("INSERT INTO ".$db_table_prefix."jngc_users (
		username,
		telephone
		)
		VALUES (
		?,
		?
		)");
	$stmt->bind_param("ss", $username, $telephone);
	$stmt->execute();
	$stmt->close();

	$status = 'ok';
}

$result['status'] = $status;
die(json_encode($result));