<?php
/**
 * Created by PhpStorm.
 * Web by https://www.alihanniba.com/
 * User: alihanniba
 * Date: 5/24/16
 * Time: 4:43 PM
 */

function arrToOne($multi)
{
    $arr = array();
    foreach ($multi as $key => $val) {
        if (is_array($val)) {
            $arr = array_merge($arr, arrToOne($val));
        } else {
            $arr[] = $val;
        }
    }
    return $arr;
}



