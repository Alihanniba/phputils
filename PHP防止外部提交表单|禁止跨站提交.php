<?php
/**
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-29 17:28:12
 * @version \www.alihanniba.com\
 */

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : NULL;

$host = $_SERVER['HTTP_HOST'];

echo '提交过来的地址' . $referer;
echo '<br>';
echo '本站域名: ' . $host;
echo '<br>';
echo substr($referer,7,strlen($host));

if(substr($referer,7,strlen($host)) != $host){
    echo '非法操作';
}else{
    echo '正常操作';
}

