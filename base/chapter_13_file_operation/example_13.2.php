<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/30
 * Time: 16:07
 */
?>

<table border="1" cellpadding="0" cellspacing="0">
    <tr>
        <td align="right" valign="middle" scope="col"> 使用 fgets 函数：</td>
        <td align="center" valign="middle" scope="col">
            <!-- 使用 fgets 函数读取.php文件 -->
            <?php
            $fopen = fopen('fun.php', 'rb');
            while (!feof($fopen)) {                                 // feof 函数测试指针位置是否到了文件结束的位置
                echo fgets($fopen);                                 // 输出当前行
            }
            fclose($fopen);
            ?>
        </td>
    </tr>

    <tr>
        <td align="right" valign="middle" scope="col"> 使用 fgets 函数：</td>
        <td align="center" valign="middle" scope="col">
            <!-- 使用 fgetss 函数读取.php文件 -->
            <?php
            $fopen = fopen('fun.php', 'rb');
            while (!feof($fopen)) {                                 // feof 函数测试指针位置是否到了文件结束的位置
                echo fgetss($fopen);                                 // 输出当前行
            }
            fclose($fopen);
            ?>
        </td>
    </tr>
</table>
