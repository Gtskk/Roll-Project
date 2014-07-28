<?php

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}


$status = '';
$result = array();

//登录
if(isset($_POST) && $_POST['action'] == 'login'){

	$username = sanitize(trim($_POST["loginId"]));
	$password = trim($_POST["password"]);


	//A security note here, never tell the user which credential was incorrect
	if(!usernameExists($username))
	{
		$status = 'inviladId';
	}
	else
	{
		$userdetails = fetchUserDetails($username);
		//See if the user's account is activated
		if($userdetails["active"]==0)
		{
			$status = 'userLocked';
		}
		else
		{
			//Hash the password and use the salt from the database to compare the password.
			$entered_pass = generateHash($password,$userdetails["password"]);
			
			if($entered_pass != $userdetails["password"])
			{
				//Again, we know the password is at fault here, but lets not give away the combination incase of someone bruteforcing
				$status = 'inputCorrect';
			}
			else
			{
				//Passwords match! we're good to go'
				
				//Construct a new logged in user object
				//Transfer some db data to the session object
				$loggedInUser = new loggedInUser();
				$loggedInUser->email = $userdetails["email"];
				$loggedInUser->user_id = $userdetails["id"];
				$loggedInUser->hash_pw = $userdetails["password"];
				$loggedInUser->title = $userdetails["title"];
				$loggedInUser->displayname = $userdetails["display_name"];
				$loggedInUser->username = $userdetails["user_name"];
				
				//Update last sign in
				$loggedInUser->updateLastSignIn();
				$_SESSION["userCakeUser"] = $loggedInUser;

				$status = 'ok';

			}
		}
	}

	//注册
}else if(isset($_POST) && $_POST['action'] == 'register'){

	$email = trim($_POST["email"]);
	$username = trim($_POST["username"]);
	$displayname = trim($_POST["displayname"]);
	$password = trim($_POST["password"]);
	$captcha = md5($_POST["captcha"]);

	if ($captcha != $_SESSION['captcha'])
	{
		$status = lang("CAPTCHA_FAIL");
		$result['status'] = $status;
		die(json_encode($result));
	}
	if(minMaxRange(8,20,$username))
	{
		$status = lang("ACCOUNT_USER_CHAR_LIMIT",array(5,25));
		$result['status'] = $status;
		die(json_encode($result));
	}
	if(!ctype_alnum($username)){
		$status = lang("ACCOUNT_USER_INVALID_CHARACTERS");
		$result['status'] = $status;
		die(json_encode($result));
	}
	if(minMaxRange(2,10,$displayname))
	{
		$status = lang("ACCOUNT_DISPLAY_CHAR_LIMIT",array(2,25));
		$result['status'] = $status;
		die(json_encode($result));
	}
	if(minMaxRange(8,25,$password))
	{
		$status = lang("ACCOUNT_PASS_CHAR_LIMIT",array(8,50));
		$result['status'] = $status;
		die(json_encode($result));
	}
	/*if(!preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/",$phone)){
		$status = lang("ACCOUNT_INVALID_PHONE");
		$result['status'] = $status;
		die(json_encode($result));
	}*/


	//注册成功
	//Construct a user object
	$user = new User($username,$displayname,$password,$email);
	
	//Checking this flag tells us whether there were any errors such as possible data duplication occured
	if(!$user->status)
	{
		if($user->username_taken) $status = lang("ACCOUNT_USERNAME_IN_USE",array($username));
		/*if($user->displayname_taken) $errors[] = lang("ACCOUNT_DISPLAYNAME_IN_USE",array($displayname));*/
		if($user->email_taken) 	  $status = lang("ACCOUNT_EMAIL_IN_USE",array($email));		
	}
	else
	{
		//Attempt to add the user to the database, carry out finishing  tasks like emailing the user (if required)
		if(!$user->userCakeAddUser())
		{
			if($user->mail_failure) $status = lang("MAIL_ERROR");
			if($user->sql_failure)  $status = lang("SQL_ERROR");
		}
		$status = 'ok';
	}
}

$result['status'] = $status;
die(json_encode($result));
