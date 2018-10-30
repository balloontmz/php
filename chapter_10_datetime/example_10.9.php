<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/30
 * Time: 14:06
 */
// 比较两个时间的大小
$time1 = date("Y-m-d H:i:s");               // 获取当前时间
$time2 = "2018-10-30 15:20:30";                     // 给变量$time2 设置一个时间
echo "<br>";
echo "变量\$time1 的时间为： ".$time1."<br>";
echo "变量\$time2 的时间为： ".$time2."<br>";
if (strtotime($time1) - strtotime($time2) < 0) {
    echo "\$time1 早于 \$time2";
} else {
    echo "\$time2 早于 \$time1";
}

// 实现倒计时功能
$time1 = strtotime(date("Y-m-d H:i:s"));
$time2 = strtotime("2018-11-11 00:00:00");
$time3 = strtotime("2019-1-1");
$sub1 = ceil(($time2 - $time1)/3600);         // 进一取整  小时
$sub2 = ceil(($time3 - $time1)/86400);          // 天
echo "离双11还有<font color='red'> $sub1 </font>小时！！！"."<br>";
echo "离元旦还有<font color='red'> $sub2</font>天！！！"."<br>";
echo gettype($sub2);                                  // 返回值为双精度小数

// 某些时候需要计算运行时间等比较精确的时间的时候，需要用到microtime()函数。
// 该函数返回当前的时间，精确到微秒。当php代码启动之前和终止之前各运行一遍，
// 得到时间的差值就是运行时间。
/*
声明一个run_time 函数
此函数功能和 microtime(true); 功能一样，传入true参数返回的将是浮点值
*/

function run_time () {
    list($msec, $sec) = explode(" ", microtime());  // explode 将字符串通过分隔符转换为数组
    return ((float)$msec + (float)$sec);
}

$ran = mt_rand(10, 50);
$start = run_time();
for ($i=0; $i<$ran; $i++) {
    usleep(1e+4);   // 科学记数法表示，微秒sleep。一秒等于一百万微秒
}
$end = run_time();
echo "该循环的运行时间为<font color='blue'>".($end-$start)."</font>";
