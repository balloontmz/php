<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 10/26/18
 * Time: 11:20 AM
 */
    echo "变量（\$string1）直接诶赋值为null： ";
    $string1 = null;
    $string3 = "str";
    if (!isset($string1))
        echo "string1 = null";
    echo "<p> 变量（\$string2）未被赋值： ";
    if (!isset($string2))
        echo "string2 = null";
    echo "<p>被 unset() 函数处理过的变量（\$tring3）:";
    unset($string3);
    if (!isset($string3))
        echo "string3 = null";