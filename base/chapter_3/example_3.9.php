<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 10/26/18
 * Time: 1:29 PM
 */
    echo "<br>";
    define("MESSAGE", "我是一名php程序员");
    echo MESSAGE."<br>";                        // 输出常量MESSAGE
    echo Message."<br>";                        // 输出"Message", 表示没有该常量
    define("COUNT", "我想要怒放的生命", true);
    echo COUNT."<br>";                          // 输出常量COUNT
    echo Count."<br>";                          // 输出常量COUNT，因为设定了大小写不敏感
    $name = "count";
    echo constant($name)."<br>";                // 输出常量COUNT，采用字符串调用的形式
    echo (defined("MESSAGE"))."<br>";     // 如果常量被定义，则返回true。echo 输出 1

