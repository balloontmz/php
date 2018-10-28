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


