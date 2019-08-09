<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 10/26/18
 * Time: 10:41 AM
 */
    $str1 = 1234567890;     // 声明一个十进制整数
    $str2 = 0x1234567890;
    // $str3 = 0123456789;
    $str4 = 01234567;
    echo '数字 1234567890 不同进制的输出结果： <p>';
    echo '十进制的结果是： '.$str1.'<br>';
    echo '十六进制的结果是： '.$str2.'<br>';
    echo '八进制的结果是： ';
    if (true){
        echo '$str3 = $str4 = '.$str4;
    } else {
        echo '$str3 != $str4';
    }
