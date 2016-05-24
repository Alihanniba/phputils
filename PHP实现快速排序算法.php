<?php
/**
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-29 17:51:47
 * @version \www.alihanniba.com\
 */

function quicksort($seq)
{
    if(count($seq) > 1){
        $k = $seq[0];
        $x = array();
        $y = array();
        for ($i=1; $i < count($seq); $i++) {
            if($seq[$i] <= $k){
                $x[] = $seq[$i];
            }else{
                $y[] = $seq[$i];
            }
        }
        $x = quicksort($x);
        $y = quicksort($y);

        return array_merge($x, array($k), $k);
    }else{
        return $seq;
    }
}


$arr = array(12,2,1,14,14,22,41,55,2,123,34,56,74,3);
echo json_encode(quicksort($arr);

