<?php
/**
 *
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-24 14:05:15
 * @version \www.alihanniba.com\
 */
//如果php文件是utf8编码,系统是gbk编码,那么就需要转下编码,不然在系统中找不到这个文件
$file = realpath(mb_convert_encoding('测试图片.JPG','GBK','utf8'));

$file = realpath('temp.jpg');  //要上传的文件

$fields['f'] = '@'.$file;  //前面加@符表示上传文件

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,'http://localhost/upload.php');

curl_setopt($ch,CURLOPT_POST,true);

curl_setopt($ch,CURLOPT_POSTFIELDS,$fields);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$content = curl_exec();

echo $content;
