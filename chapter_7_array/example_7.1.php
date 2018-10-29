<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/29
 * Time: 11:56
 */
    // 1. 通过array() 函数声明数组
    echo "<br>";
    $array= array("1"=>"编","2"=>"程","3"=>"词", "4"=>"典");
    print_r($array);
    echo "<br>";
    echo $array[1];
    echo $array[2];
    echo $array[3];
    echo $array[4];

    // 2. 通过为数组元素赋值声明数组
    // 数组中的索引根据插入的顺序排序，而不是索引编号
    echo "<br>";
    $array_2[2] = "编";
    $array_2[4] = "程";
    $array_2[1] = "词";
    $array_2[3] = "典";
    print_r($array_2);              // 输出所创建的数组

    echo "<br>";
    $array_3["2"] = "编";
    $array_3["tim"] = "程";
    $array_3["1"] = "词";
    $array_3["3"] = "典";
    print_r($array_3);              // 输出所创建的数组

    // 二维数组
    echo "<br>";
    $str = array(
        "书籍"=>array("文学","历史","地理"),
        "体育用品"=>array("m"=>"足球","n"=>"篮球"),
        "水果"=>array("橙子", 8=>"葡萄", "苹果")
    );
    print_r($str);

    // foreach 操作数组
    echo "<br>";
    $url = array(
        '编程辞典网'=>'www.baidu.com',
        '编程体验网'=>'www.google.com',
        '编程实践网'=>'www.easy.com'
        );
    foreach ($url as $link) {
        echo $link."<br>";
    }

    // list
    echo "<br>";
    $array= array("编","程","词","典");
    list($a[1], $a[2], $a[3], $a[4]) = $array;
    print_r($a);

    // each
    echo "<br>";
    $a = array('tom');
    print_r(each($a));          // 该函数已被弃用

    // 数组元素的统计，第二个参数默认为0，代表统计一层的元素个数
    // 如果第二个参数设置为1，则代表递归统计所有数组的元素个数
    echo "<br>";
    $array = array(
        "php"=>array(
            "php_2"=>array("tom","tiddler","zip"),
            "php_3"=>array("filter","reduce","map")
        ),
        "cpp"=>array("mail","math")
    );
    echo count($array);
    echo "<br>";
    echo count($array, COUNT_RECURSIVE);
