<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>用户登录</title>
<meta name="keywords"  content="金盛国际" />
<meta name="description" content="金盛国际活动" />
<meta name="author" content="天放网科" />
<meta content="zh-CN" http-equiv="content-language" />
<link rel="shortcut icon" type="image/ico" href="http://www.kuaipan.cn/static/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/reset.css" /><link rel="stylesheet" type="text/css" href="css/common.css" /><script type="text/javascript" src="js/jquery.min.js"></script><script type="text/javascript" src="js/jqueryui.js"></script><link rel="stylesheet" type="text/css" href="css/jqueryui/jqueryui.css" /><style>
body {
    background:#eee;
}
#wrapper{
    width:350px; 
    height:200px;
    margin:0 auto;
}
#wrapper {
}

#wrapper .tips {
    font-size:12px;
    display:inline-block;
    padding-right:20px;
    position:relative;
    bottom:-5px;
}

#wrapper .tips a {
    color:#039;
    text-decoration:underline;
}

#wrapper .tips a:hover {
}

#wrapper .msg {
    color:red;
    padding-left:95px;
}

#wrapper label {
    height:30px;
    line-height:30px;
    font-size:16px;

}

#wrapper .ipt {
    background:#fff;
    border:1px solid #ccc;  
    height:28px;
    line-height:28px;
    margin-bottom:10px;
    box-shadow:0 1px 0 #fff;
    border-radius:2px;
    width:200px;
}

#wrapper .ipt:focus {
    box-shadow:0 0 3px rgba(86,180,289,0.3);
    border:1px solid #56b4ef;
}

#wrapper .sp {
    border-top:1px solid #ccc; 
    border-bottom:1px solid #fff;
    border-left:0 none transparent;
    border-right:0 none transparent;
    height:0;
    overflow:hidden;
}
#wrapper label {
    color:#333;
    font-size:14px;
    display:inline-block;
    width:90px;
    text-align:right;
}
.reg-btn {
    margin-right:50px;
    border:1px solid #ddb63d;               
    background:#FFE641;
    color:#000;
    height:25px;
    width:80px;
    background: -moz-linear-gradient(top, #FFE641, #ddb63d); 
    background: -webkit-gradient(linear,top,from(#ffe641),to(#ddb63d));
    background: -webkit-linear-gradient(top, #ffe641, #ddb63d);
    background: -o-linear-gradient(top, #ffe641, #ddb63d);
}
.reg-btn:hover {
    border:1px solid #ec8B11;   
    background: -moz-linear-gradient(top, #FED84A, #ec8B11); 
    background: -webkit-gradient(linear,top,from(#FED84A),to(#ec8B11));
    background: -webkit-linear-gradient(top, #FED84A, #ec8B11);
    background: -o-linear-gradient(top, #FED84A, #ec8B11);
}

.login-btn {
    margin-right:55px;
    border:1px solid #057ed0;           
    width:50px;
    height:25px;
    color:#fff;
    background:#32bbef;
    background: -moz-linear-gradient(top, #33bcef, #019ad2); 
    background: -webkit-gradient(linear,top,from(#33bcef),to(#057ed0));
    background: -webkit-linear-gradient(top, #33bcef, #057ed0);
    background: -o-linear-gradient(top, #33bcef, #057ed0);
}

.login-btn:hover {
    border:1px solid #0271bf;   
    background: -moz-linear-gradient(top, #2daddc, #0271bf); 
    background: -webkit-gradient(linear,top,from(#2daddc),to(#0271bf));
    background: -webkit-linear-gradient(top, #2daddc, #0271bf);
    background: -o-linear-gradient(top, #2daddc, #0271bf);
}
.mt20 {
    margin-top:20px;
}
.mt10 {
    margin-top:10px;
}
.pt20 {
    padding-top:20px;
}
.check-code {
    height:30px;
    display:inline-block;
    vertical-align:middle;
    margin-left:10px;
    cursor:pointer;
}
.mb0 {
    margin-bottom:0px;
}
.protocol {
    margin-left:95px;
    color:#999;
}
.protocol input {
    position:relative;
    bottom:-2px;
}
.protocol a {
    color:#999;
}
.check-captcha{vertical-align: top;}
</style>
</head>
<body>
<div id="wrapper">
    <!--登录框-->
    <div id="login"<?php if(isset($_GET['action']) && $_GET['action'] == 'register'):?> class="dn"<?php endif;?>>
        <form action="#" method="post">
            <div class="" style="height:160px">
                <p class="msg pt20">帐号为手机号码</p>
                <div>
                    <label for="loginId">帐号：</label>
                    <input type="text" class="ipt" name="loginId" />
                </div>
                <div>
                    <label for="password">密码：</label>
                    <input type="password" class="ipt" name="password" />
                </div>
            </div>
            <hr class="sp" />
            <div class="tr mt20">
                <span class="tips">没有帐号？ <a href="javascript:changeReg();">去注册</a></span>
                <input type="submit" id="login-submit" class="login-btn" value="登录" />
            </div>
        </form>
    </div>
    <!--注册框-->
    <div id="ereg"<?php if(isset($_GET['action']) && $_GET['action'] == 'login'):?> class="dn"<?php endif;?>>
        <form action="#" method="post">
            <div>
                <p class="msg" id="reg-msg">请务必填写可用的手机号码，方便与您联系</p>
                <div>
                    <label for="username">手机号码：</label>
                    <input type="text" class="ipt" name="username" id="reg-username" />
                </div>
                <div>
                    <label for="displayname">姓名：</label>
                    <input type="text" class="ipt" name="displayname" id="reg-displayname" />
                </div>
                <div>
                    <label for="password">密码：</label>
                    <input type="password" class="ipt" name="password" id="reg-pwd" />
                </div>
                <div>
                    <label for="passwordc">确认：</label>
                    <input type="password" class="ipt" name="passwordc" id="reg-pwdc" />
                </div>
                <div>
                    <label for="loginId">邮箱地址：</label>
                    <input type="text" class="ipt" name="email" id="reg-email" />
                </div>
                <div>
                    <label for="password">验证码：</label>
                    <input type="text" class="ipt mb0" name="checkCode" id="reg-captcha" style="width:80px;" /><img class="check-captcha" src="models/captcha.php" onclick="this.src='models/captcha.php?=' + new Date().getTime()" alt="验证码" title="点击更换" />
                </div>
            </div>
            <hr class="sp" />
            <div class="tr mt20">
                <span class="tips">已有帐号？ <a href="javascript:changeLogin();">去登录</a></span>
                <input type="button" class="reg-btn" id="reg-submit" value="立即注册" />
            </div>
        </form>
    </div>
</div>
<script>
//切换到登录页面
function changeLogin() {
    $('#ereg').hide().find('form').trigger('reset');
    $('#login').fadeIn();
}

//切换到注册页
function changeReg() {
    $('#login').hide().find('form').trigger('reset');
    $('#ereg').fadeIn();    
}
</script>
<script>
(function($){
    jQuery.fn.eReg = function (options) {
        var options = $.extend({
            'notice': '#reg-msg', //提示框
            'username': '#reg-username', //用户名
            'displayname': '#reg-displayname', //显示名
            'email': '#reg-email', //邮箱输入框
            'password': '#reg-pwd', //密码输入框
            'repassword': '#reg-pwdc', //密码确认框
            'captcha': '#reg-captcha', //验证码输入框
            'submit': '#reg-submit', //提交按钮
            'regURL': 'choujiang_user.php',
            'ifCheckRePassword': true
        }, options);            
        var noticeObj = $(options.notice);
        var usernameObj = $(options.username);
        var displayObj = $(options.displayname);
        var emailObj = $(options.email);
        var passwordObj = $(options.password);
        if (options.ifCheckRePassword) {var repasswordObj = $(options.repassword)}
        var captchaObj = $(options.captcha);
        var submitObj = $(options.submit);

        $(this).bind('submit', function(){return false;});

        usernameObj.blur(function(){
            checkEmpty();
        })

        emailObj.blur(function () { 
            checkEmpty() && checkEmail();
        });

        passwordObj.blur(function () {
            checkEmpty() && checkPassword();
        });

        captchaObj.blur(function () {
            checkEmpty() && checkEmail() && checkPassword() && checkCaptcha();
        });

        submitObj.click(function(){
            if(checkEmpty() && checkEmail() && checkPassword() && checkCaptcha()){
                var username = $.trim(usernameObj.val());
                var displayname = $.trim(displayObj.val());
                var email = $.trim(emailObj.val());
                var password = $.trim(passwordObj.val());
                var captcha = $.trim(captchaObj.val());
                $.post(options.regURL, {"username": username, "displayname": displayname, "email": email, "password": password, "captcha": captcha, "action": "register" }, function (data) {
                    if(data.status == 'ok'){
                        alert('注册成功！请在页面刷新后登录！');
                        parent.location.reload();
                    }else{
                        var msg = data.status;
                        noticeObj.text(msg);
                    }
                }, 'json' )
            }
        })

        /*//查看协议是否注册
        function checkProtocol() {
            if('checked' !== protocolObj.attr('checked')) {
                noticeObj.text('请阅读并同意用户协议');
                return false;               
            }
            return true;
        }*/

        //检测是否为空
        function checkEmpty(){
            var username = $.trim(usernameObj.val());
            var displayname = $.trim(displayObj.val());

            if(username == ''){
                noticeObj.text('手机号码不能为空');
                return false;
            }
            if(displayname == ''){
                noticeObj.text('显示名不能为空');
                return false;
            }

            noticeObj.html('&nbsp;');
            return true;
        }

        //检测邮箱是否正确
        function checkEmail() {
            var email = $.trim(emailObj.val());
            if(email == '') {
                noticeObj.text('邮箱不能为空');
                return false;
            }
            if(!/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/i.test(email)){
                noticeObj.text('邮箱格式不正确'); 
                return false;
            }
            noticeObj.html('&nbsp;');
            return true;
        }

         
        //检测密码是否正确
        function checkPassword () {
            var password = $.trim(passwordObj.val());

            if(password.length < 6 ){
                noticeObj.text('密码过短，不能小于6个字符');
                return false;
            
            }else if( password.length > 32){
                noticeObj.text('密码过长，不能大于32个字符');
                return false;
            }

            if(repasswordObj){
                var repassword = $.trim(repasswordObj.val());
                if(password !== repassword){
                    noticeObj.text('两次密码输入不一致');
                    return false;
                }
            }

            noticeObj.html('&nbsp;');
            return true;
        }


        //检测验证码
        function checkCaptcha () {
            var captchaNum = $.trim(captchaObj.val());
            if(captchaNum == '' ){
                noticeObj.text('验证码不能为空');
                return false;
            }else{
                noticeObj.html('&nbsp;');
                return true;
            }
        }

        return $(this);
        
    }
})(jQuery);
$('#ereg form').eReg({});
</script>
<script>
//登录插件
(function($){
    $.fn.login = function(options){
        settings = {
            loginUrl: 'choujiang_user.php',
            msgEle: $(this).find('.msg'),
            loginIdEle: $(this).find("input[name='loginId']"),
            passwordEle: $(this).find("input[name='password']")
        };

        var ERROR_MSG = {
            'inputCorrect': '用户名与密码不匹配',
            'passwordLength': '密码应在6-32位字符内',
            'noreg': '此账号未注册',
            'checkemailcode_2':'此账号未注册',
            'checkemailcode_':'服务器繁忙，请稍后再试',
            'accountNotMatch': '账号密码不匹配',
            'serverdown': '服务器维护中',
            'clientUserBaned': '您的账号被限制登录',
            'accUserInvalid': '正在对该账号进行绑定处理，暂无法登陆',
            'userLocked': '帐号锁定中，暂时无法登录',
            'inviladId': '帐号不存在'
        }

        $(this).bind('submit', function(){
            submit();
            return false;
        });

        function submit() {
            var loginId = $.trim(settings.loginIdEle.val()),
            password = $.trim(settings.passwordEle.val());
            if(loginId == '') {
                showMsg('登录名不能为空');
                return;
            }

            if(password == '') {
                showMsg('密码不能为空');
                return;
            }

            $.post(settings.loginUrl, {'loginId': loginId, 'password': password, 'action': 'login'}, function(data){
                if(data.status == 'ok') {
                    parent.location.reload();
                } else {
                    if(typeof ERROR_MSG[data.status] == 'string') {
                        showMsg(ERROR_MSG[data.status]);
                    } else {
                        showMsg('服务器维护中');
                    }
                }
            }, 'json');
        }

        function showMsg(msg) {
            settings.msgEle.html(msg);
        }

        if(typeof options == 'string'){
            switch(options) {
                case 'submit':
                    submit();
                    break;
                default:

            }       
        }
        return $(this);

    }
})(jQuery);
</script>
<script>
$('#login form').login({});
</script>
</body>
</html>