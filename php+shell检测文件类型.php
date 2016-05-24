<?php
/**
 *
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-24 12:09:46
 * @version \www.alihanniba.com\
 */

//通过判断 限制上传文件的格式为PDF,docx,xlsx,pptx,potx,vsdx,odt,doc,xls,ppt,vsd,pot,wps,dps,e t和txt,rtf文件类型

function checkFileType($filename){
    //文件头
$_typecode = array(
        '3780',//PDF
        '8075',//.docx,.xlsx,.pptx,.potx,.vsdx,.odt
        '208207',//.doc,.xls,.ppt,.vsd,.pot,.wps,.dps,.et
   );
    $file = fopen($filename, "rb");
    //contents = stream_get_contents($file);
    //$contents = fread($file, filesize($filename));
    $bin = fread($file, 2); //只读2字节
    fclose($file);
    $strInfo = @unpack("C2chars", $bin);// C为无符号整数，网上搜到的都是c，为有符号整数，这样会产生负数判断不正常
    $typeCode = intval($strInfo['chars1'].$strInfo['chars2']);
    exec("file $filename",$output,$return_var);//用linux系统命令file判断上传文件的类型,主要是判断txt,rtf文件类型
    $pattern = '/text,/';//rtf和txt文档用file检测都会被检测为text
    $_count =  preg_match($pattern,strrchr($output[0],":"));
    echo $typeCode;
    if(in_array($typeCode,$_typecode) || $_count == 1) {
        return true;
    }else{
        return false;
    }
}




