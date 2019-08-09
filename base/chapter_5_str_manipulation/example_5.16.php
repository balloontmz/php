<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/28
 * Time: 18:06
 */
    echo "<br>";
    $str2 = "某某";
    $str1 = "**";
    $str = " AAAaaa某某公司是一家例如： “基础教育课程手机报•特刊” == 》 “基础教育课程手机报?特刊”
    解决办法是将字段改成NChar，NVarchar等类型，在入库的时候每个字符串插入前都加入一个N，如N’lily
    ’、N’Male’，兼容性会更好，作为Nvarchar字段,这是一种推荐做法!";
    echo str_replace($str2, $str1, $str);
    echo "<br>--------</br>";
    echo str_ireplace("a","b", $str);       // 忽略大小写
    echo "<br>--------</br>";

    // 关键字描红
    $contant = "全国各地收货地址大全內容可能令人反感;不可將本物品內容派發,傳閱,出售,出租,交給或出借予
    年齡未滿 18 歲的人士出示,全国各地收货地址大全播放或播映,请记住全国.";
    $str = "全国";
    echo str_ireplace($str, "<font color='#ff0000'>".$str."</font>", $contant);
    echo "<br>--------</br>";

    $str = "用今日的辛勤工作，换明日的百倍回报";
    $replace = "千倍";
    echo substr_replace($str, $replace,-12, 9);  // 这些汉字有三个字节
    echo "<br>--------</br>";


