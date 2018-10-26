<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/26
 * Time: 15:59
 */
    $i = "mingribook";          // 声明变量$i
    $j = & $i;                  // 使用引用赋值，这时$j已经赋值为mingribook
    $i = "mrbccd";              // 重新给$j赋值
    echo "<br>";
    echo $j;                   // 输出变量$j
    echo "<br>";
    echo $i;                   // 输出变量$i