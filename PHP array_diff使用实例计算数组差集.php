<?php
/**
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-29 17:25:11
 * @version \www.alihanniba.com\
 */


$array1 = array('OH','CA','NY','HI','CT');
$array2 = array('OH','CA','HI','NY','IA');
$array3 = array('TX','MD','NE','OH','HI');
$diff = array_diff($array1, $array2, $array3);

echo json_encode($diff);
