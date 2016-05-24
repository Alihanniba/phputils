<?php
/**
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-29 17:59:40
 * @version \www.alihanniba.com\
 */

// function shortUrl($url)
// {
//     $base32 = array(
//         'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',
//         'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p',
//         'q', 'r', 's', 't', 'u', 'v', 'w', 'x',
//         'y', 'z', '0', '1', '2', '3', '4', '5'
//     );

//     $hex = md5($url);
//     $hexLength = strlen($hex);
//     $subHexLen = $hexLength / 8;

//     $output = array();
//     for ($i=0; $i < $subHexLen; $i++) {
//         //每循环一次取到8位
//         $subHex = substr($hex,$i * 8,8);
//         $int = 0x3FFFFFFF & (1 * ('0x'.$subHex));
//         $out = '';
//         for($j = 0;$j < 6; $j++){
//             $val = 0x0000001F & $int;
//             $out .= $base32[$val];
//             $int = $int >> 5;
//         }
//         $output[] = $out;
//     }
//     return $output;
// }

function shortUrl2($url)
{
    //sprintf() 函数把格式化的字符串写入变量中
    //crc32() 函数计算字符串的 32 位 CRC（循环冗余校验）
    //提示：为了确保从 crc32() 函数中获得正确的字符串表示，您需要使用 printf() 或 sprintf() 函数的 %u 格式符。如果未使用 %u 格式符，结果可能会显示为不正确的数字或者负数。
    $result = sprintf("%u",crc32($url));
    $show = '';
    while ($result > 0) {
        $s = $result % 62;
        if($s > 35){
            $s = chr($s+61);
        }else if($s > 9 && $s <= 35){
            $s = chr($s + 55);
        }
        $show .= $s;
        $result = floor($result / 62);
    }
    return $show;
}

echo shortUrl2('https://www.alihanniba.com/');
