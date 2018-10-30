<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 10/29/18
 * Time: 9:38 PM
 */
// floor 舍一取整 ceil 进一取整
$x = 2.7;
$y = 3.01;
echo "<br/>";
echo floor($x)."<br/>";       // 舍一取整
echo ceil($y);        // 进一取整
// 用于，对于记录数x，每页显示y条数据，页数需要进一取整 z = ceil(x/y);

// 幂运算 pow  平方根
echo "<br/>";
echo pow(2, 3);            // 2 的 3 次方
echo "<br/>";
echo sqrt(4);                    // 2 的平方根

// 最大最小值 max/min
echo "<br/>";
echo max(2, 3);
echo "<br/>";
echo min(4, 5);

// rand mt_rand 随机数
echo "<br/>";
echo rand(50, 80);
echo "<br/>";
echo mt_rand(50, 80);
echo "<br/>";
$str = 'abcdefghijklmnopqrstuvwxyz';
for($i=0; $i<4; $i++){
    $char .= substr($str, mt_rand(0, strlen($str)-1), 1);
}
echo $char;

// float round(float $val[, int $precision=0])  四舍五入，默认参数指定小数位数
echo "<br/>";
$f = 2.549;
echo round($f, 1);  // 2.5 保留一位只看第二位，从此推测

// 数字格式化
echo "<br/>";
$x = 7896.827;
echo number_format($x, 2, ".", " ");

// 浮点数余数 fmod  得到浮点数除法的余数
echo "<br/>";
$x = 96.827;
echo fmod($x, 25.2);   // 余数：21.227
