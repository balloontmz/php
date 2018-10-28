<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/28
 * Time: 15:24
 */
    // trim函数
    $str = "\r\r(:@_@ 创图书编辑伟业，铸明日辉煌 @_@:)";
    echo "<br>";
    echo trim($str);                                        // 去除字符串左右两边的空格
    echo "<br>";                                            // 执行换行
    echo trim($str, "\r\r(::)");                   // 去除字符串两边的制定字符

    // ltrim函数
    echo "<br>";
    echo ltrim($str, "\r\r(::)");                   // 去除字符串左边的指定字符

    // rtrim函数
    echo "<br>";
    echo rtrim($str, "\r\r(::)");                   // 去除字符串右边的指定字符

    // 转义、还原字符串数据
