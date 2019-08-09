<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 10/26/18
 * Time: 11:33 AM
 */
    $num = '3.1415926r*r';      // 声明一个带字符的字符串

    echo '<p>';
    echo '<p>';

    echo '使用（integer）操作符转换 $num 类型： ';
    echo (integer)$num;
    echo '<p>';
    echo '输出变量$num 的值： '.$num;

    echo '<p>';
    echo '使用 settype 函数转换变量$num类型： ';
    echo settype($num, 'integer');
    echo '<p>';
    echo '输出变量$num的值： '.$num;

    $boo = "043112345678";
    $bo = is_numeric($boo);
    echo '<p>';
    echo '$bo 值为： '.$bo;
