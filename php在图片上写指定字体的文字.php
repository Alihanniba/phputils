<?php
/**
 *
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-28 20:56:24
 * @version \www.alihanniba.com\
 */

header('Content-type:image/gif');

$image = imagecreate(400, 200);

$red = imagecolorallocate($image, 255, 0, 0);

$blue = imagecolorallocate($image,0,0,255);

$font = 'ARIALBD.TTF';

imagettftext($image, 50, 0, 20, 100, $blue, $font, 'outofmemory.cn');

imagegif($image);
