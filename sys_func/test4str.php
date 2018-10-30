<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 10/28/18
 * Time: 10:01 PM
 */
// 截取字符串
echo '<br>---------</br>';
$str1 = 'abcdcef';
$str2 = 'c';
$str3 = 'C';
echo strstr($str1, $str2);          // 大小写敏感
echo stristr($str1, $str3);         // 忽略大小写
echo strrchr($str1, $str2);         // 后序截取
// 截取字符串还可以采用 substr  和 strpos 函数组合完成。
echo '<br>---------</br>';

//反转字符串
$filename = 'ab.cd.gif.png';
$str = strrev($filename);
echo $str;
$str2 = strtolower($filename);       // 据此推测，单双引号的区别主要是对于变量是否替换的问题
echo '<br>---------</br> ';          // 此处单引号内部元素渲染出来了

// 字符串加密函数 md5
$str = 'tomtiddler';                // 摘要算法
echo md5($str);
echo '<br>---------</br>';

// 打乱字符串  生成验证码
$str = 'abcdefghijklmnopqrstuvwxyz';
$str = str_shuffle($str);
echo $str;
echo '<br>---------</br>';
echo substr($str, 0, 4);
echo '<br>---------</br>';

// 分割字符串
$str = 'A|B|C|D';
$arr = explode('|', $str); // 返回值是一个数组
print_r($arr);
echo '<br>---------</br>';

// 将一个一维数组的值转换为字符串
$arr = array('tom', 'John', 'Rose');
$str = implode(',', $arr);    // glue分隔符，默认为空
$str2 = implode($arr);

echo $str, $str2;
echo '<br>---------</br>';

// sprintf 函数  格式化字符串
$num = 5;
$str = 'shanghai';
// %% %b %d %e %s %f
// 附加 格式  %.2f
// 左调变量值
$txt = sprintf('there are %u million cars in %s', $num, $str);
echo $txt;
echo '<br>---------</br>';

// 当多个占位符需要引用同一参数时，需要占位符<%x\$+contant>  下例。其中 x代表参数序号，contant代表格式类型
$num = 123;
// 使用参数交换时，n $ 位置说明符必须紧跟在百分号（％）之后，在任何其他说明符之前。
$text = sprintf("带有两位小数的结果是：%1\$.2f，不带小数的结果是：%1\$d", $num);
// 格式化字符串 补全说明符：010  以0为占位，补全字符串  '*10  以 * 为占位，补全字符串。位置说明符必须在所有其他说明符之前
$text2 = sprintf("带有两位小数的结果是：%1\$010.2f，不带小数的结果是：%1\$'*10d", $num);
echo $text;
echo '<br>---------</br>';
echo $text2;

//课程总结：
//1. 函数库基础
//    1. 内置函数
//    2. 自定义函数
//2. 如何安装字符串函数库
//3. 字符函数库列表--常用函数