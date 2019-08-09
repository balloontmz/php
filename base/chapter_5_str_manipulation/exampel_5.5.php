<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/28
 * Time: 15:42
 */
    // 转义和反转义字符串函数
    echo "<br>";
    $str = "select * from tb_book where bookname = 'php 从入门到精通'";
    echo $str."<br>";
    $a = addslashes($str);
    echo $a."<br>";
    $b = stripslashes($a);
    echo $b."<br>";

    // 转义制定==指定的字符
    echo "<br>";
    $str = "\r\n编程词典网\r\n";
    echo $str."<br>";
    $a = addcslashes($str, "编程词典");
    echo $a."<br>";
    $b = stripcslashes($a);
    echo $b."<br>";