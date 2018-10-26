<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/26
 * Time: 16:22
 */
    $hr = "黄蓉";             // 声明全局变量$hr
    function lxt (){
        $gj = "郭靖";         // 声明局部变量$gj
        echo $gj."<br>";     // 输出局部变量的值
        global $hr;          // 利用global在函数内部定义全局变量
        echo $hr."<br>";     // 输出全局变量的值
    }
    echo "<br>";
    lxt();