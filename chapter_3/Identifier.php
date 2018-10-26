<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 10/26/18
 * Time: 10:33 AM
 * 定界符、标识符
 */
    $i = '显示这行内容';
    echo <<<std
    这和双引号没有什么区别，\$i 同样可以被输出出来。<p>
    \$i 的内容为： $i
std;
