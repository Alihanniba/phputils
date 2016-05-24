<?php
/**
 * Created by PhpStorm.
 * Web by https://www.alihanniba.com/
 * User: alihanniba
 * Date: 5/24/16
 * Time: 4:37 PM
 */

//关掉浏览器,php脚本也能继续执行
ignore_user_abort();

//通过set_time_limit(0)可以让程序无限制的执行下去
set_time_limit(0);

//每隔半小时运行
$interval = 60*30;

do{
    //这里是执行代码
    //等待五分钟
    sleep($interval);
}while(true);





