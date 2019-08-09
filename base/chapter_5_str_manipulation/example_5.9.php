<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/28
 * Time: 16:33
 */
    // substr() 函数简单使用
    echo "<br>";
    echo substr("She is a well-read girl", 0);
    echo "<br>";
    echo substr("She is a well-read girl", 4, 14);
    echo "<br>";
    echo substr("She is a well-read girl", -4, 4);
    echo "<br>";
    echo substr("She is a well-read girl", 0, -4);
    echo "<br>";
    echo substr("She is a well-read girl", 20, -4);
    echo "<br>";

    // substr() 函数可能的应用场景
    // 从指定的字符串中按照指定的位置截取一定长度的字符，通过substr()函数可以获取某个固定格式字符串的一部分
    $test = "通过这种方式\$a=test()得到的其实不是函数的引用返回,这跟普通的函数调用没有区别,至于原因:
    这是PHP的规定,PHP规定通过\$a=&test(); 方式得到的才是函.";
    if (strlen($test) > 30) {
        echo substr($test, 0, 30);
    } else {
        echo $test;
    }
