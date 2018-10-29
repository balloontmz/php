<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/29
 * Time: 18:37
 */
    // 设置时区，默认的是UTC。
    date_default_timezone_set("Asia/ShangHai");
    // 各种日期时间格式的常量 date 函数  返回的是一个字符串
    echo "DATA_ATOM=    ".date(DATE_ATOM)."\n";
    echo "DATA_COOKIE=  ".date(DATE_COOKIE)."\n";
    echo "DATE_ISO8601= ".date(DATE_ISO8601)."\n";
    echo "DATE_RFC822=  ".date(DATE_RFC822)."\n";
    echo "DATE_RFC850=  ".date(DATE_RFC850)."\n";
    echo "DATE_RSS=     ".date(DATE_RSS)."\n";
    echo "DATE_W3C=     ".date(DATE_W3C)."\n";

    // getdate 函数 返回的是一个数组
    $arr = getdate();
    echo $arr['year']."-".$arr['mon']."-".$arr['mday']." ";         // 返回当前的日期信息
    echo $arr['hours'].":".$arr['minutes'].":".$arr['seconds']." ".$arr['weekday'];       // 返回当前的时间信息
    echo "\n";
    echo "Today is the $arr[yday]th of year";

    // 检验日期的有效性
    $year = 2008;
    $mouth = 2;
    $day1 = 29;
    $day2 = 30;
    var_dump(checkdate($mouth, $day1, $year));
    var_dump(checkdate($mouth, $day2, $year));

    // 自定义date 的format 字符串
    echo "输出单个变量： ".date("Y")."-".date("m")."-".date("d");
    echo "\n";
    echo "输出组合变量： ".date("Y-m-d");
    echo "\n";
    echo "输出更详细的日期和时间： ".date("Y-m-d H:i:s");
    echo "\n";
    echo "还可以更详细吗： ".date("I Y-m-d H:i:s T");
    echo "\n";
    echo "输出转义字符： ".date("\T\o\d\a\y \i\s \\t\h\\e jS \o\\f \m\o\\n\\t\h");
    echo "\n";