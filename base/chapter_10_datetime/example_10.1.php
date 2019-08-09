<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/29
 * Time: 18:17
 */
    // 将时间和日期转换为时间戳
    echo "<p>";
    $timestamp = mktime(12, 23, 56, 12, 10, 2018);
    echo "指定的时间戳： ".$timestamp."<p>";
    echo "指定的日期为： ".date("Y-m-d", $timestamp)."<p>";
    echo "指定的时间为： ".date("H:i:s", $timestamp)."<p>";

    // 本例中使用 time() 函数获取当前时间戳，并将当前时间戳格式化输出。
    $now = time();
    // echo date_default_timezone_get();
    // 返回一个布尔值，代表创建成功
    date_default_timezone_set("Asia/ShangHai");
    echo 'Now: '.date('Y-m-d').'<p>';
    echo 'Now time: '.date("H:i:s", $now).'<p>';
    echo 'Next Week: '.date('Y-m-d', $now + 7 * 14 * 60 * 60);

