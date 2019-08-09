<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/30
 * Time: 11:15
 */
// 那些内容被本地格式化 LC_ALL 代表格式化所有参数 字符串比较、分类转换、货币、数值、时间，
// 第二个参数指定日期，linux通过locale -a 查看
// 没跑通，多关注下linux吧
echo '<br/>';
setlocale(LC_ALL, "en_US");
echo '美国格式： '.strftime('Today is %A');
echo '<br/>';

// setlocale(LC_ALL, "chs");
echo '中文简体格式： '.strftime('今天是 %A').'------';
echo '<br/>';

// setlocale(LC_ALL, "cht");
echo '中文繁体格式： '.strftime('今天是 %A');
echo '<br/>';