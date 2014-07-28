<?php

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//本次抽奖的奖项信息，必须按照从大到小的顺序进行填写，id为奖次，prize为中奖信息,v为中奖概率,num为奖品数量
//需要注意的是，该处也必须包含不中奖的信息，概率从小到大进行排序
$prize_arr = array(
    '0' => array('id' => 1, 'prize' => '汪峰演唱会门票', 'v' => 1,'num'=>3),
    '1' => array('id' => 2, 'prize' => '很遗憾', 'v' => 35.8,'num'=>1000000000),
    '2' => array('id' => 3, 'prize' => '金盛集团笔记本', 'v' => 0.1,'num'=>30),
    '3' => array('id' => 4, 'prize' => '很遗憾', 'v' => 25,'num'=>1000000000),
    '4' => array('id' => 5, 'prize' => '金盛集团VIP双层雨伞', 'v' => 0.1,'num'=>20),
    '5' => array('id' => 6, 'prize' => '很遗憾', 'v' => 38,'num'=>1000000000),
);

if(isset($_SESSION["userCakeUser"])){
    $userCakeUser = $_SESSION["userCakeUser"];
    $user_id = $userCakeUser->user_id;
    $user = fetchUserDetails(NULL, NULL, $user_id);
    $phone = ($user && is_array($user)) ? $user['user_name'] : 'Empty';

    //从数据库中获取特定奖项序号的次数，大于等于设置的最大次数则提示奖品被抽完，如果需要一直中最后一个纪念奖，则修改该处即可
    foreach ($prize_arr as $key => $val) {
        if(getPrizeNum($key+1) == ($val['num'])){
            $prize_arr[5]['v'] = $prize_arr[5]['v']+$val['v'];
            $val['v'] = 0;
        }

        if($key == 0){
            $arr[$val['id']] = $val['v'];
        }else{
            $arr[$val['id']] = $val['v']*100;
        }
    }

    //$rid中奖的序列号码
    $rid = get_rand($arr); //根据概率获取奖项id
      
    $str = $prize_arr[$rid - 1]['prize']; //中奖项

    $status = 'ok';


    if(getChoujiangNum($user_id) > 0){
        $str = '今天的抽奖次数用完了！';
        $status = 'noChance';
        $rid = 0;
    }else{
        //生成一个用户抽奖的数据，用来记录到数据库
        $data=array(
            'rid'=>$rid,
            'user_id'=>$user_id,
            'info'=>$str,
            'phone'=>$phone,
            'input_time'=>time()
        );
        //将用户抽奖信息数组写入数据库
          
        addZhongjiang($data);

        $data = array();
        $result['status'] = $status;
        $result['info'] = $str;
    }

}else{
    $rid = 0;
    $status = 'noLogin';
    $str = '没有登录';
}

$result['status'] = $status;
$result['rid'] = $rid;
$result['info'] = $str;
die(json_encode($result));