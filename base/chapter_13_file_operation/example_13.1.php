<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/30
 * Time: 15:37
 */
// 读取整个文件 readfile file 和 file_get_contents
?>

<table width="500" border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td width="253" height="100" align="right" valign="middle" scope="col">
            使用readfile()函数读取的内容：</td>
        <td width="241" height="100" align="center" valign="middle" scope="col">
            <!-- 使用 readfile()函数读取 tm.txt 文件的内容 -->
            <?php readfile('tm.txt'); ?>
            <!-- ----------------------------------------- -->
        </td>
    </tr>

    <tr>
        <td height="100" align="right" valign="middle">
            使用 file 函数读取文件内容：
        </td>
        <td height="100" align="center" valign="middle">
            <!-- 使用 file 函数读取 tm.txt 文件的内容 -->
            <?php
            $f_arr = file('tm.txt');
            foreach ($f_arr as $cont) {
                echo $cont."<br>";
            }
            ?></td>
            <!-- ------------------------------------ -->
    </tr>

    <tr>
        <td width="250" height="25" align="right" valign="middle" scope="col">
            使用file_get_contents()函数读取文件内容：
        </td>
        <td height="25" align="center" valign="middle" scope="col">
            <!-- 使用file_get_contents函数读取 tm.txt 文件的内容 -->
            <?php
            $f_chr = file_get_contents('tm.txt');
            echo $f_chr;
            ?>
            <!-- ----------------------------------------------- -->
        </td>
    </tr>
</table>
