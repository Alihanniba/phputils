<?php
/**
 *
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-24 13:47:49
 * @version \www.alihanniba.com\
 */

function vtime($time)
{
    $output = '';
    foreach (array(86400 => '天',3600 => '小时',60 => '分',1 => '秒') as $key => $value) {
        if($time >= $key){
            $output .= floor($time/$key) . $value;
            $time %= $key;
        }
    }
    return $output;
}
echo  vtime(435353);

/**
 * 计算给定的秒数距离当前时间多久
 * @param int $timestamp
 *  秒数，通常是当前时间减去另一个时间
 * @param int $granularity
 *  显示层级，默认为 年 周 天 小时 分钟 秒
 * @return string
 */
// function format_interval($timestamp,$granularity = 5){
//     $units = array(
//         31536000 => t('system','年'),
//         604800 => t('system','周'),
//         86400 => t('system','天'),
//         3600 => t('system','小时'),
//         60 => t('system','分钟'),
//         1 => t('system','秒')
//     );
//     $output = '';

//     foreach ($units as $key => $value) {
//         if($timestamp >= $key){
//             $output .= floor($timestamp / $key) . $value;
//             $timestamp %= $key;
//             $granularity--;
//         }
//         if($granularity == 0){
//             break;
//         }
//     }
//     return $output?$output:t('system','0秒');
// }

// echo format_interval(4245325342532);

