<?php

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//抽奖的开始时间
$begin_time="2013-12-05 13:00"; //开始时间  0-不限制
//抽奖的结束时间
$stop_time="0";  //结束时间  0-不限制

if(!empty($begin_time) && time()<strtotime($begin_time)){
    $begin_time = "2013-12-05";
    $status = 'notBegin';
    $data['info'] = '抽奖开始时间为：'.$begin_time;
    $result['status'] = $status;
    $result['data'] = $data;
    die(json_encode($result));
}
  
if(!empty($stop_time) && time()>strtotime($stop_time)){
    $status = 'expire';
    $data['info'] = '本次抽奖已经结束，结束时间为：'.$stop_time;
    $result['status'] = $status;
    $result['data'] = $data;
    die(json_encode($result));
}

if(isset($_SESSION["userCakeUser"])){
    $userCakeUser = $_SESSION["userCakeUser"];
    $user_id = $userCakeUser->user_id;
    $phone = $userCakeUser->username;
}else{
    $user_id = 0;
}
$usedTimes = getChoujiangNum($user_id);

//判定该手机号是否中过奖
$zhongjiangStatus = checkZhongjiang($phone);
if($zhongjiangStatus){
    $status = 'alreadyGet';
    $data['info'] = '感谢您的参与，您已经中过奖了';
    $result['status'] = $status;
    $result['data'] = $data;
    die(json_encode($result));
}

if($usedTimes > 0){
    $total = 0;
}else{
    $total = 1;
}
$data = array('total'=>$total);
$status = 'ok';
$result = array(
    'status' => $status,
    'data' => $data
);

die(json_encode($result));