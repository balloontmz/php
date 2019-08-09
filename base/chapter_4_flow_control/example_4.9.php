<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/28
 * Time: 11:51
 */
    // break的初步使用
    while (true) {
        $tmp = rand(1, 20);
        echo $tmp." ";
        if ($tmp == 10) {
            echo "<p>变量等于10，终止循环</p>";
            break;
        }
    }
    echo "<br>-----------</br>";

    // break跳出多层循环
    // 本例共有三层循环，最外层的while循环和中间层的for循环是无限循环。最里面两个并列的
    // for 循环：程序首先执行第一个for循环，当满足跳出条件，直接跳出第一个循环，执行第二
    // 个循环。第二个循环满足条件时跳出到最外层，第二层for后面的语句不再执行。
    while (true) {
        for (;;) {
            for ($i = 0; $i <= 10; $i++) {
                echo $i." ";
                if ($i == 7) {
                    echo "<p>变量\$i等于7，跳出一重循环<p>";
                    break 1;
                }
            }

            for ($j = 0; $j <= 20; $i++) {
                echo $i." ";
                if ($i == 15) {
                    echo "<p>变量\$i等于15，跳出三重循环。到达最外层<p>";
                    break 3;
                }
            }
        }
    }

    // continue终止本次循环进入下一轮循环。同样可以跳出多层
    $arr = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J");       // 声明一个数组变量$arr
    for ($i = 0; $i < 10; $i++) {                                         // 使用for循环
        echo "<br>";
        if ($i %2 == 0) {                                                 // 如果$i的值为偶数，则跳出本次循环
            continue;
        }
        for (;;) {                                                        // 无限循环
            for ($j = 0; $j < count($arr); $j++) {                        // 再次使用for循环输出数组变量
                if ($j == $i) {                                           // 如果当前输出的数组下标等于$i则跳出循环
                    continue 3;
                } else {
                    echo "\$arr[".$j."]=".$arr[$j]." ";                   // 输出表达式
                }
            }
        }
        echo "这句话永远不会输出";
    }
