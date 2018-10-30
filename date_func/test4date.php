<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 10/29/18
 * Time: 10:17 PM
 */
// date(string format, int timestamp)  第二个参数为unix时间戳
echo '<br/>';
date_default_timezone_set('Asia/ShangHai');
echo date('Y-m-d H:i:s');
// date_default_timezone_get();  // 东八区  获取时区

// time 获取当前时间戳
echo '<br/>';
echo time();
echo '<br/>当前的日期时间是：'.date('Y-m-d H:i:s');
echo '<br/>昨天的日期时间是：'.date('Y-m-d H:i:s', time()-86400);  // 86400=24*60*60

// strtotime
echo '<br/>';
echo strtotime('-3 weeks');
echo '<br/>三星期之前的日期时间是：'.date('Y-m-d H:i:s', strtotime('-3 weeks'));

// microtime  返回时间戳和微秒数
echo '<br/>';
echo microtime();  // 返回一个微秒数 空格 时间戳
echo '<br/>';      // 非常精确的时间，可用于计算程序的执行时间
echo microtime(true);  // 返回一个浮点数

// uniqid 生成唯一id
echo '<br/>';
echo '<br/>'.uniqid();
echo '<br/>'.uniqid(microtime(true).mt_rand());  // 加上唯一的微秒数，更加保持唯一
echo '<br/>'.md5(uniqid(microtime(true)));  // 文件名既唯一，又长度固定

// getdate 获取日期/时间相关信息
echo '<br/>';
print_r(getdate());
echo '<br/>';
print_r(getdate(time()));  // 可选参数 时间戳
echo '<br/>';
