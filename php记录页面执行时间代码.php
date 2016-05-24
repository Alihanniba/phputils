<?php
/**
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-29 17:36:53
 * @version \www.alihanniba.com\
 */

class Run_Rime
{
    $startTime = 0;
    $stopTime  = 0;

    public function get_microtime(){
        list($usec, $sec) = explode(' ', microtime());
        return ((float)$usec + (float)$sec);
    }

    function start(){
        $this->startTime = $this->get_microtime();
    }

    function stop(){
        $this->stopTime = $this->get_microtime();
    }

    function spent(){
        return round(($this->stopTime - $this->startTime) * 1000,1);
    }
}


$runTime = new Run_Rime;
$runTime->start();
