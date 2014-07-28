<?php
/*
UserCake Version: 2.0.2
http://usercake.com

	Translation by: Rock Zhang
	E-Mail: iamgtskk@gmail.com
*/

/*
%m1% - Dymamic markers which are replaced at run time by the relevant index.
*/

$lang = array();

//Account
$lang = array_merge($lang,array(
	"ACCOUNT_SPECIFY_USERNAME" 		=> "请输入用户名",
	"ACCOUNT_SPECIFY_PASSWORD" 		=> "请输入密码",
	"ACCOUNT_SPECIFY_EMAIL"			=> "请输入邮箱",
	"ACCOUNT_INVALID_EMAIL"			=> "邮箱不可用",
	"ACCOUNT_INVALID_PHONE"         => "手机号码不可用",
	"ACCOUNT_USER_OR_EMAIL_INVALID"		=> "用户名或者邮箱不可用",
	"ACCOUNT_USER_OR_PASS_INVALID"		=> "用户名或者密码不可用",
	"ACCOUNT_ALREADY_ACTIVE"		=> "帐户已经已激活",
	"ACCOUNT_INACTIVE"			=> "帐户未激活，查看你的邮箱收件箱或者垃圾箱查看激活说明",
	"ACCOUNT_USER_CHAR_LIMIT"		=> "用户名必须是%m1%-%m2%个字符",
	"ACCOUNT_DISPLAY_CHAR_LIMIT"		=> "显示名称必须是%m1%-%m2%个字符",
	"ACCOUNT_PASS_CHAR_LIMIT"		=> "密码必须是%m1%-%m2%个字符",
	"ACCOUNT_TITLE_CHAR_LIMIT"		=> "帐户类别必须是%m1%-%m2%个字符",
	"ACCOUNT_PASS_MISMATCH"			=> "两次密码必须匹配",
	"ACCOUNT_DISPLAY_INVALID_CHARACTERS"	=> "显示名称只能包含数字或字母",
	"ACCOUNT_USERNAME_IN_USE"		=> "用户名%m1%已存在",
	"ACCOUNT_DISPLAYNAME_IN_USE"		=> "显示名称%m1%已存在",
	"ACCOUNT_EMAIL_IN_USE"			=> "邮箱%m1%已存在",
	"ACCOUNT_LINK_ALREADY_SENT"		=> "一封激活邮件%m1%小时前已经发送至你的邮箱",
	"ACCOUNT_NEW_ACTIVATION_SENT"		=> "我们已经给你发送了一个激活链接，请查收",
	"ACCOUNT_SPECIFY_NEW_PASSWORD"		=> "请输入新密码",	
	"ACCOUNT_SPECIFY_CONFIRM_PASSWORD"	=> "请确认新密码",
	"ACCOUNT_NEW_PASSWORD_LENGTH"		=> "新密码必须是%m1%-%m2%个字符",	
	"ACCOUNT_PASSWORD_INVALID"		=> "密码不正确",	
	"ACCOUNT_DETAILS_UPDATED"		=> "帐户信息更新成功",
	"ACCOUNT_ACTIVATION_MESSAGE"		=> "登录之前需要激活帐户。请点击以下链接激活帐户。\n\n
	%m1%activate-account.php?token=%m2%",							
	"ACCOUNT_ACTIVATION_COMPLETE"		=> "帐户激活成功。按<a href=\"login.php\">此</a>登录。",
	"ACCOUNT_REGISTRATION_COMPLETE_TYPE1"	=> "注册成功。按<a href=\"login.php\">此</a>登录。",
	"ACCOUNT_REGISTRATION_COMPLETE_TYPE2"	=> "注册成功。稍后会收到一封激活邮件。登录之前必须激活帐户。",
	"ACCOUNT_PASSWORD_NOTHING_TO_UPDATE"	=> "新密码必须不同于旧密码",
	"ACCOUNT_PASSWORD_UPDATED"		=> "修改密码成功",
	"ACCOUNT_EMAIL_UPDATED"			=> "帐户邮箱修改成功",
	"ACCOUNT_TOKEN_NOT_FOUND"		=> "口令错误或帐户已激活",
	"ACCOUNT_USER_INVALID_CHARACTERS"	=> "用户名只能包含字母或数字",
	"ACCOUNT_DELETIONS_SUCCESSFUL"		=> "删除用户%m1%成功",
	"ACCOUNT_MANUALLY_ACTIVATED"		=> "%m1%的帐户手动激活成功",
	"ACCOUNT_DISPLAYNAME_UPDATED"		=> "显示名称修改为%m1%",
	"ACCOUNT_TITLE_UPDATED"			=> "%m1%的帐户类别修改为%m2%",
	"ACCOUNT_PERMISSION_ADDED"		=> "新增%m1%权限",
	"ACCOUNT_PERMISSION_REMOVED"		=> "移除%m1%权限",
	"ACCOUNT_INVALID_USERNAME"		=> "用户名不可用",
	));

//Configuration
$lang = array_merge($lang,array(
	"CONFIG_NAME_CHAR_LIMIT"		=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_URL_CHAR_LIMIT"			=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_EMAIL_CHAR_LIMIT"		=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_ACTIVATION_TRUE_FALSE"		=> "Email activation must be either `true` or `false`",
	"CONFIG_ACTIVATION_RESEND_RANGE"	=> "Activation Threshold must be between %m1% and %m2% hours",
	"CONFIG_LANGUAGE_CHAR_LIMIT"		=> "Language path must be between %m1% and %m2% characters in length",
	"CONFIG_LANGUAGE_INVALID"		=> "There is no file for the language key `%m1%`",
	"CONFIG_TEMPLATE_CHAR_LIMIT"		=> "Template path must be between %m1% and %m2% characters in length",
	"CONFIG_TEMPLATE_INVALID"		=> "模版文件`%m1%`不存在",
	"CONFIG_EMAIL_INVALID"			=> "你输入的邮箱不可用",
	"CONFIG_INVALID_URL_END"		=> "网站地址结尾需要/",
	"CONFIG_UPDATE_SUCCESSFUL"		=> "网站配置更新成功。设置在新页面生效",
	));

//Forgot Password
$lang = array_merge($lang,array(
	"FORGOTPASS_INVALID_TOKEN"		=> "激活令牌不可用",
	"FORGOTPASS_NEW_PASS_EMAIL"		=> "我们已经将新密码发送到你的邮箱",
	"FORGOTPASS_REQUEST_CANNED"		=> "取消忘记密码请求",
	"FORGOTPASS_REQUEST_EXISTS"		=> "该账户已经申请过忘记密码",
	"FORGOTPASS_REQUEST_SUCCESS"		=> "We have emailed you instructions on how to regain access to your account",
	));

//Mail
$lang = array_merge($lang,array(
	"MAIL_ERROR"				=> "尝试邮箱出错，请联系管理员",
	"MAIL_TEMPLATE_BUILD_ERROR"		=> "建立邮箱模版出错",
	"MAIL_TEMPLATE_DIRECTORY_ERROR"		=> "不能访问mail-templates目录。尝试设置该目录权限为%m1%",
	"MAIL_TEMPLATE_FILE_EMPTY"		=> "空模版文件...什么也没发送",
	));

//Miscellaneous
$lang = array_merge($lang,array(
	"CAPTCHA_FAIL"				=> "验证码错误",
	"CONFIRM"				=> "确认",
	"DENY"					=> "拒绝",
	"SUCCESS"				=> "成功",
	"ERROR"					=> "错误",
	"NOTHING_TO_UPDATE"			=> "更新失败",
	"SQL_ERROR"				=> "Fatal SQL error",
	"FEATURE_DISABLED"			=> "该功能已经被禁用",
	"PAGE_PRIVATE_TOGGLED"			=> "This page is now %m1%",
	"PAGE_ACCESS_REMOVED"			=> "Page access removed for %m1% permission level(s)",
	"PAGE_ACCESS_ADDED"			=> "Page access added for %m1% permission level(s)",
	));

//Permissions
$lang = array_merge($lang,array(
	"PERMISSION_CHAR_LIMIT"			=> "权限名必须是%m1%-%m2%个字符",
	"PERMISSION_NAME_IN_USE"		=> "权限名%m1%已存在",
	"PERMISSION_DELETIONS_SUCCESSFUL"	=> "输出%m1%权限成功",
	"PERMISSION_CREATION_SUCCESSFUL"	=> "创建`%m1%`权限成功",
	"PERMISSION_NAME_UPDATE"		=> "权限名修改为`%m1%`",
	"PERMISSION_REMOVE_PAGES"		=> "移除对%m1%页面的访问权限成功",
	"PERMISSION_ADD_PAGES"			=> "添加对%m1%页面的访问权限成功",
	"PERMISSION_REMOVE_USERS"		=> "移除%m1%用户成功",
	"PERMISSION_ADD_USERS"			=> "新增%m1%用户成功",
	"CANNOT_DELETE_NEWUSERS"		=> "默认'新用户'组无法删除",
	"CANNOT_DELETE_ADMIN"			=> "默认'管理员'组无法删除",
	));
?>