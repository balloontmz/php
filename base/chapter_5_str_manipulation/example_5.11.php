<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/28
 * Time: 16:57
 */
    // 按字节比较字符串
    $str1 = "明日编程词典！";
    $str2 = "明日编程词典！";
    $str3 = "mrsoft";
    $str4 = "MRSOFT";
    echo strcmp($str1, $str2);          //  0  相等
    echo strcmp($str3, $str4);          //  1   str3 大于 str4
    echo strcasecmp($str3, $str4);      //  0   相等

    // 按自然排序法进行比较
    $str1 = "str2.jpg";
    $str2 = "str10.jpg";
    $str3 = "mrsoft1";
    $str4 = "MRSOFT2";
    echo strcmp($str1, $str2);          // 按字节进行比较
    echo " ";
    echo strcmp($str3, $str4);
    echo " ";
    echo strnatcmp($str1, $str2);          // 按自然排序法进行比较
    echo " ";                              // 该函数区分大小写
    echo strnatcmp($str3, $str4);          // 如果想不区分大小写，采用strnatcasecmp()函数
    echo " ";

    // 指定从源字符串的位置开始比较
    $str1 = "I like PHP !";
    $str2 = "i am fine !";
    echo strncmp($str1, $str2, 2);     // 比较两个字符串的前两位，区分大小写，将返回-1
