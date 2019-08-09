<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/30
 * Time: 16:57
 */
$filepath = '05.txt';
$str = '此情可待成追忆，只是当时已惘然。';
echo '<p>用 fwrite 函数写入文件：';
$fopen = fopen($filepath, "wb") or die('文件不存在');
fwrite($fopen,$str);
fclose($fopen);
readfile($filepath);
echo '<p>用file_put_contents 函数写入文件：';
file_put_contents($filepath, $str);
readfile($filepath);
echo '<p>';
