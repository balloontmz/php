<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/29
 * Time: 10:17
 */
    // 格式化数字 number_format
    $number = 1868.96;
    echo "<br>";
    echo number_format($number);                // 一个参数
    echo "<br>";
    echo number_format($number, 2);  // 两个参数，指定小数位数
    echo "<br>";
    $number = 118867532.755298730;
    // 四个参数，指定小数位数和小数描述符以及千分分隔符
    echo number_format($number, 2, '.', ' ');
    echo "<br>";

    // 分割、合成字符串
    $str = "PHP 编程词典@ Net 编程词典@ ASP 编程词典 @@    @ JSP编程词典@";
    $str_arr = explode("@", $str);    //
    print_r($str_arr);
    echo "<br>";
    $str = implode("=>", $str_arr);
    echo $str;
    echo "<br>";

    //
    $str = "&&  明日编程字典   $$";
    $strl = trim($str, "&$\r\t\n\x0B\0 ");
    echo $strl;