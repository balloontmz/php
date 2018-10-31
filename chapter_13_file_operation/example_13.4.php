<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/30
 * Time: 16:33
 */
$filename = '04.txt';
$fp = fopen($filename, 'rb');
echo '<p>';
echo fread($fp, 32);
echo '<p>';
echo fread($fp, filesize($filename));
echo '<p>';
