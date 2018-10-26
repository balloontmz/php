<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/26
 * Time: 16:09
 */
    echo "<br>";
    $example = "在。。。函数外";                         // 声明全局变量
    function example(){
        $example = "。。。在函数内。。。";               // 声明局部变量
        echo "在函数内输出的内容是： $example<br>";     // 输出局部变量
    }
    example();                                         // 调用函数，输出变量值
    echo "在函数外输出的内容是： $example<br>";        // 输出全局变量