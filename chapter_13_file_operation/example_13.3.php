<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/30
 * Time: 16:26
 */
$fopen = fopen('03.txt', 'rb');
while (false !== ($char = fgetc($fopen))) {
    echo $char;
}
fclose($fopen);