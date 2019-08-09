<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/28
 * Time: 10:24
 */
    // if 语句
    $num = rand(1, 31);
    if ($num % 2 == 0) {
        echo "<br>\$num = $num";
        echo "<br>$num 是偶数。</br>";
    }
    echo "<br>-----------</br>";

    // if else 语句
    $num_2 = rand(1, 31);
    if ($num_2 % 2 == 0) {
        echo "\$num2 = $num_2";
        echo "<br>$num_2 是偶数。";
    } else {
        echo "<br>$num_2 是奇数。";
    }
    echo "<br>-----------</br>";

    // elseif 语句
    $score = rand(40, 100);
    if ($score > 90) {
        echo "成绩优秀";
    } elseif ($score > 60) {
        echo "成绩合格";
    } else {
        echo "不及格";
    }
    echo "<br>-----------</br>";

    // elseif语句2
    $month = date("n");
    $today = date("j");
    if ($today >= 1 and $today <= 10) {                 // 变量的真假并不代表表达式的真假
        echo "今天是$month 月$today 日，是本月上旬";    // 例如 $bool = false  if ($bool==false) {} 为真
    } elseif ($today >= 1 and $today <= 10) {
        echo "今天是$month 月$today 日，是本月中旬";
    } else {
        echo "今天是$month 月$today 日，是本月下旬";
    }
    echo "<br>-----------</br>";

    // switch语句
    $week = date("w");                          // 返回的是一个string类型
    switch ($week) {
        case "0":
            echo "today is sunday";
            break;
        case "1":
            echo "today is sunday";
            break;
        case "2":
            echo "today is sunday";
            break;
        default:
            echo "today is $week";
            // echo gettype($week);
    }
