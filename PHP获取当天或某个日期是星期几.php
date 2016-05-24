<?php
/**
 *
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-24 11:22:49
 * @version \www.alihanniba.com\
 */

function getWeekName($data,$format = "星期")
{

    $week = date("D ",$data);
    switch ($week) {
        case "Mon ":
            $current = $format . "一";
            break;
        case "Tue ":
            $current = $format . "二";
            break;
        case "Wed ":
            $current = $format . "三";
            break;
        case "Thu ":
            $current = $format . "四";
            break;
        case "Fri ":
            $current = $format . "五";
            break;
        case "Sat ":
            $current = $format . "六";
            break;
        case "Sun ":
            $current = $format . "日";
            break;
    }
    return $current;
}

echo "今天是: " . getWeekName(time(),"星期");
echo " <br> ";
echo "今天是: " . getWeekName(time(),"礼拜");
echo " <br> ";
echo "2016-3-24是: " . getWeekName(strtotime('2016-3-24'),'礼拜');
