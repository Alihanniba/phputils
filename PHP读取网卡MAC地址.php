<?php
/**
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-29 18:54:45
 * @version \www.alihanniba.com\
 */

class Get_Mac_Addr
{
    $return_array = array();
    $mac_addr;
    function GetMacAddr($os_type){
        switch (strtolower($os_type)) {
            case 'linux':
                $this->forLinux();
                break;
            case 'solaris':
                break;
            case 'unix':
                break
            case 'aix':
                break;
            default:
                $this->forWindows();
                break;
        }
        $temp_array = array();
        foreach ($this->return_array as $value) {
            if (preg_match("/[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f][:-]"."[0-9a-f][0-9a-f]/i",$value,$temp_array ) ){
                $this->mac_addr = $temp_array[0];
                break;
            }
        }
        unset($temp_array);
        return $this->mac_addr;
    }

    function forWindows(){
        //exec — 执行一个外部程序
        @exec("ipconfig/all",$this->return_array);
        if($this->return_array){
            return $this->return_array;
        }else{
            //未完成
        }
    }
}
