<?php
/**
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-29 19:05:34
 * @version \www.alihanniba.com\
 */

// 根据身份证号，自动返回对应的星座
function get_xingzuo($cid) {
    $cid = getIDCard($cid);

    if (!isIdCard($cid)) return '';
    $bir = substr($cid,10,4);
    $month = (int)substr($bir,0,2);
    $day = (int)substr($bir,2);
    $strValue = '';
    if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) {
        $strValue = "水瓶座";
    } else if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) {
        $strValue = "双鱼座";
    } else if (($month == 3 && $day > 20) || ($month == 4 && $day <= 19)) {
        $strValue = "白羊座";
    } else if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
        $strValue = "金牛座";
    } else if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 21)) {
        $strValue = "双子座";
    } else if (($month == 6 && $day > 21) || ($month == 7 && $day <= 22)) {
        $strValue = "巨蟹座";
    } else if (($month == 7 && $day > 22) || ($month == 8 && $day <= 22)) {
        $strValue = "狮子座";
    } else if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
        $strValue = "处女座";
    } else if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 23)) {
        $strValue = "天秤座";
    } else if (($month == 10 && $day > 23) || ($month == 11 && $day <= 22)) {
        $strValue = "天蝎座";
    } else if (($month == 11 && $day > 22) || ($month == 12 && $day <= 21)) {
        $strValue = "射手座";
    } else if (($month == 12 && $day > 21) || ($month == 1 && $day <= 19)) {
        $strValue = "魔羯座";
    }
    return $strValue;
}
// 根据身份证号，自动返回对应的生肖
function get_shengxiao($cid) {
    $cid = getIDCard($cid);
    if (!isIdCard($cid)) return '';
    $start = 1901;
    $end = $end = (int)substr($cid,6,4);
    $x = ($start - $end) % 12;
    $value = "";
    if ($x == 1 || $x == -11) {
        $value = "鼠";
    }
    if ($x == 0) {
        $value = "牛";
    }
    if ($x == 11 || $x == -1){
        $value = "虎";
    }
    if ($x == 10 || $x == -2){
        $value = "兔";
    }
    if ($x == 9 || $x == -3){
        $value = "龙";
    }
    if ($x == 8 || $x == -4){
        $value = "蛇";
    }
    if ($x == 7 || $x == -5){
        $value = "马";
    }
    if ($x == 6 || $x == -6){
        $value = "羊";
    }
    if ($x == 5 || $x == -7){
        $value = "猴";
    }
    if ($x == 4 || $x == -8){
        $value = "鸡";
    }
    if ($x == 3 || $x == -9){
        $value = "狗";
    }
    if ($x == 2 || $x == -10){
        $value = "猪";
    }
    return $value;
}
function get_xingbie($cid,$comm=0) { //根据身份证号，自动返回性别
    $cid = getIDCard($cid);
    if (!isIdCard($cid)) return '';
        $sexint = (int)substr($cid,16,1);
    if($comm >0){
        return $sexint % 2 === 0 ? '女士' : '先生';
    }else{
        return $sexint % 2 === 0 ? '女' : '男';
    }
}


// 功能：把15位身份证转换成18位
function getIDCard($idCard) {
    // 若是15位，则转换成18位；否则直接返回ID
    if (15 == strlen ( $idCard )) {
        $W = array (7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2,1 );
        $A = array ("1","0","X","9","8","7","6","5","4","3","2" );
        $s = 0;
        $idCard18 = substr ( $idCard, 0, 6 ) . "19" . substr ( $idCard, 6 );
        $idCard18_len = strlen ( $idCard18 );
        for($i = 0; $i < $idCard18_len; $i ++) {
            $s = $s + substr ( $idCard18, $i, 1 ) * $W [$i];
        }
        $idCard18 .= $A [$s % 11];
        return $idCard18;
    } else {
        return $idCard;
    }
}

$cid = '430623199403185731';
get_xingzuo($cid);
get_shengxiao($cid);
get_xingbie($cid);

