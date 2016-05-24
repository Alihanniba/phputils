<?php
/**
 * Created by PhpStorm.
 * User: alihanniba
 * Date: 5/24/16
 * Time: 3:41 PM
 */

function upload($uploaddir)
{
    $tmp_name = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $type = $_FILES['file']['type'];
    $dir = $uploaddir.date('Ym');

    @chmod($dir, 0777);
    @is_dir($dir) or mkdir($dir, 0777);

    move_uploaded_file($_FILES['file']['tmp_name'], $dir . "/" . $name);

    $type = explode(".",$name);
    $type = @$type[1];
    $date = date("YmdHis");
    $rename = @rename($dir . "/" . $name, $dir . "/" . $date . "." . $type);
    if ($rename) {
        return $dir . "/" . $date . "." . $type;
    }
}

$image = upload('../images/photo/');