<?php
/**
 *
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-27 14:09:26
 * @version \www.alihanniba.com\
 */

//指定初始化向量iv的大小：
$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);

 //创建初始化向量：
$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);

//密匙
$key = "www.alihanniba.com";

//需要加密的内容
$text = "https://www.alihanniba.com/";

echo $text . "<br>";

$mcrypttext = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_ECB, $iv));

//加密后的内容
echo $mcrypttext . "<br>";

echo mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($mcrypttext), MCRYPT_MODE_ECB, $iv);


