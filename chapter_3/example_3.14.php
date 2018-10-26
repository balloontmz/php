<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/26
 * Time: 16:16
 */
    function zdy (){
        static $message = 0;
        $message += 1;
        echo $message." ";
    }
    function zdy2 (){
        $message = 0;
        $message += 1;
        echo $message." ";
    }
    echo "<br>";
    for($i=0; $i < 10; $i++)    zdy();
    echo "<br>";
    for($i=0; $i < 10; $i++)    zdy2();
    echo "<br>";