<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/29
 * Time: 17:01
 */
$array = array("php 从入门到精通", "php范例手册");
$array2 = array("php 从入门到精通", "php范例手册");
echo array_push($array, "php 从入门到放弃", "php 自学手册", $array2)."\n";   // 返回新添加的元素个数
print_r($array);
