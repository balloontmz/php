<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/30
 * Time: 13:46
 */
// strtotime 日期时间解析为时间戳
// 相对时间文档 http://php.net/manual/zh/datetime.formats.relative.php
date_default_timezone_set("Asia/ShangHai");
echo "<br>";
echo strtotime("now")."<br>";                      // 输出当前时间的时间戳
echo "输出时间：".date("Y-m-d H:i:s", strtotime("now"))."<br>";

echo strtotime("21 May 2009")."<br>";              // 输出指定日期的时间戳，没有指定时刻将清零 00:00:00
echo "特定日期：".date("Y-m-d H:i:s", strtotime("21 May 2009"))."<br>";

echo strtotime("+3 day")."<br>";
echo "延后三天：".date("Y-m-d", strtotime("+3 day"))."<br>";

echo strtotime("+1 week")."<br>";                  // 时分和现在同步
echo strtotime("+1 week 2 days 3 hours 4 seconds")."<br>";
echo strtotime("next Thursday")."<br>";
echo strtotime("last Monday")."<br>";               // 只有日期同步，时间清零