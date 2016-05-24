<?php
/**
 *
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-24 22:55:59
 * @version \www.alihanniba.com\
 */

header("Content-type:text/html;Charset=utf8");

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,'http://www.babytree.com/user/picjournal.php');

$header = array();

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

curl_setopt($ch,CURLOPT_HEADER,true);

curl_setopt($ch,CURLOPT_HTTPHEADER,$header);

curl_setopt($ch,CURLOPT_COOKIE,'B=115.100.62.7.1401937092035530; bdshare_firstime=1401937092199; __myutma=122328856.1548793539.1401937093.1408503164.1408694138.69;');

$content = curl_exec();

echo "<pre>";print_r(curl_error($ch));echo "</pre>";

echo "<pre>";print_r(curl_getinfo($ch));echo "</pre>";

echo "<pre>";print_r($header);echo "</pre>";

echo "</br>",$content;
