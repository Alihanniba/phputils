<?php
/**
 *
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-28 13:27:55
 * @version \www.alihanniba.com\
 */

//第一种
function get_extension1($file)
{
    $file = explode('.', $file);
    return $file;
}

// response [
//               "alihanniba",
//               "jpg"
//          ]

//第二种
function get_extension2($file)
{
    //strrchar — 查找指定字符在字符串中的最后一次出现
    return substr(strrchr($file, '.'),1);
}

    //response "jpg"


//第三种
function get_extension3($file)
{
    return pathinfo($file)['extension'];
}
    //response "jpg"


//第四种
function get_extension4($file)
{
    return substr($file,strrpos($file, '.') + 1);
}
    //response "jpg"

//第五种
function get_extension5($file)
{
    //— 通过一个正则表达式分隔字符串
    $file = preg_split('/\./', $file);
    //— 将数组的内部指针指向最后一个单元
    return end($file);
}
    //response "jpg"

//第六种
function get_extension6($file)
{
    //strrev — 反转字符串
    $file = strrev($file);
    //strpos — 查找字符串首次出现的位置
    return strrev(substr($file,0,strpos($file, '.')));
}
    //response "jpg"

//第七种
function get_extension7($file)
{
    //pathinfo — 返回文件路径的信息
    return pathinfo($file,PATHINFO_EXTENSION);
}
    //response "jpg"

//第八种
function get_extension8($file)
{
    //preg_match_all — 执行一个全局正则表达式匹配
    preg_match_all('/\.[a-zA-Z0-9]+/', $file, $data);
    return !empty($data[0])?substr(end($data[0]),1):'';
}
    //response "jpg"

//第九种
function get_extension9($file)
{
    //str_replace — 子字符串替换
    return str_replace('.', '', strrchr($file,'.'));
}
    //response "jpg"

echo json_encode(get_extension1('alihanniba.jpg')) . '<br>';
echo json_encode(get_extension2('alihanniba.jpg')) . '<br>';
echo json_encode(get_extension3('alihanniba.jpg')) . '<br>';
echo json_encode(get_extension4('alihanniba.jpg')) . '<br>';
echo json_encode(get_extension5('alihanniba.jpg')) . '<br>';
echo json_encode(get_extension6('alihanniba.jpg')) . '<br>';
echo json_encode(get_extension7('alihanniba.jpg')) . '<br>';
echo json_encode(get_extension8('alihanniba.jpg')) . '<br>';
echo json_encode(get_extension9('alihanniba.jpg')) . '<br>';
