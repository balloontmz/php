<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/26
 * Time: 17:58
 *
 */
    // 按值传递方式
    echo "<p>";
    function example ($m){                  // 定义一个函数
        $m = $m *5 + 10;
        echo "在函数内： \$m = ".$m;        // 输出形参的值
    }
    $m = 1;
    example($m);                            // 传递值，将$m的值传递给形参$m
    echo "<p>在函数外 \$m = $m <p></p>";   // 实参的值没有发生变化，输出m=1

    // 按引用传递方式
    function example_2 (& $m_2){                    // 定义一个函数，同时传递参数$m_2的引用
        $m_2 = $m_2 *5 + 10;
        echo "引用在函数内： \$m_2 = ".$m_2;        // 输出形参的值
    }
    $m_2 = 1;
    example_2($m_2);                            // 传递值： 将$m_2的值传递给形参$m_2
    echo "<p>引用在函数外： \$m_2 = $m_2 <p></p>"; // 实参的值发生变化，输出m=15

    // 默认参数方式
    function values ($price, $tax=0){             // 定义一个函数，其中一个参数初始值为0
        $price = $price + ($price * $tax);         // 声明一个变量$price，等于两个参数的运算结果
        echo "价格:$price<br>";                   // 输出价格
    }
    values(100, 0.25);                 // 为可选参数赋值 0.25
    values(100);                            // 没有为可选参数赋值
