<?php
/**
 *
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-28 13:17:09
 * @version \www.alihanniba.com\
 */

function getRedGift($total,$num = 10)
{
    $min = 0.01;
    $wamp = array();
    $returnData = array();
    for ($i=1; $i < $num; ++$i) {
        //红包金额的最大值
        $safe_total = ($total - ($num - $i) * $min)/($num - $i);
        if($safe_total < 0){
            break;
        }
        //随机产生一个红包金额
        $money = @mt_rand($Min * 100,$safe_total * 100)/100;
        //剩余红包总额
        $total = $total - $money;
        //保留两位有效数字
        $wamp[$i] = round($money,2);
    }
    $wamp[$i] = round($total,2);
    $returnData['MoneySum'] = $wamp;
    $returnData['newTotal'] = array_sum($wamp);
    return $returnData;
}

//测试
$data = getRedGift(100,10);
echo json_encode($data);
