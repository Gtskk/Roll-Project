<?php
require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}


$status = '';
$result = array();

$zhufu = isset($_POST) ? $_POST['zhufu'] : '';
if(isset($_SESSION["userCakeUser"])){
	$user_id = $_SESSION["userCakeUser"]->user_id;
	if(addZhufu($zhufu, $user_id)){
		$status = 'ok';
	}else{
		$status = 'fail';
	}
}else{
	$status = 'fail';
}

$result['status'] = $status;
die(json_encode($result));
