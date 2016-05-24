<?php
/**
 *
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-27 14:52:49
 * @version \www.alihanniba.com\
 */

$str = "花一个无所谓的年纪去浪荡";

function getFileCharCode($str){
    //— iconv()字符串按要求的字符编码来转换
    $str = iconv("UTF-8","gb2312",$str);
    $targetChar = '*';
    $i = 0;

    while ($i < strlen($str)) {
        //— bin2hex()将二进制数据转换成十六进制表示
        $tmp = bin2hex(substr($str,$i,1));
        if($tmp >= 'B0'){//汉字的开始
            $t = getLetter(hexdec(bin2hex(substr($str,$i,2))));
            $targetChar = $t == -1?'*':$t;
            break;
        }esle{
            $targetChar = substr($str,$i,1);
            break;
        }
    }
    if(is_numeric($targetChar)){
        return chr($targetChar);
    }else{
        return $targetChar;
    }
}

function getLetter($num)
{
    $limit = array(
        array(45217,45252), //A
        array(45253,45760), //B
        array(45761,46317), //C
        array(46318,46825), //D
        array(46826,47009), //E
        array(47010,47296), //F
        array(47297,47613), //G
        array(47614,48118), //H
        array(0,0),         //I
        array(48119,49061), //J
        array(49062,49323), //K
        array(49324,49895), //L
        array(49896,50370), //M
        array(50371,50613), //N
        array(50614,50621), //O
        array(50622,50905), //P
        array(50906,51386), //Q
        array(51387,51445), //R
        array(51446,52217), //S
        array(52218,52697), //T
        array(0,0),         //U
        array(0,0),         //V
        array(52698,52979), //W
        array(52980,53688), //X
        array(53689,54480), //Y
        array(54481,55289), //Z
    );
    $char_index = 65;
    foreach ($$limit as $k => $v) {
        if($num >= $v[0] && $num <= $v[1]){
            $char_index += $k;
            return $char_index;
        }
    }
    return -1;
}

