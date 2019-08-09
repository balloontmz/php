<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/28
 * Time: 11:07
 */
    // while 循环 输出 10 以内的所有偶数
    echo "<br>-----------</br>";
    $num = 1;
    $str = "10以内的偶数为： ";
    while ($num <=10) {
        if ($num % 2 == 0) {
            $str .= $num." ";           // 字符串添加数字加空格
        }
        $num++;
    }
    echo $str;
    echo "<br>-----------</br>";

    // while 和 do while 的区别
    // 对于那些需要起码运行一次的循环，此功能非常合适。
    $num = 1;                           // 声明一个整形变量
    while ($num != 1) {                // 使用while循环输出
        echo "while循环";              // 条件不成立，没进入循环体
    }
    do {                               // 不管条件，先进行一次循环
        echo "do while 循环";
    } while ($num != 1);               // 判断条件是否成立，进而决定是否继续循环。
    echo "<br>-----------</br>";

    // for 循环语句  通过for循环来计算100的阶乘
    $sum = 1;
    for ($i = 1; $i <= 100; $i++) {
        $sum *= $i;
    }
    echo "100 != ".$sum;
