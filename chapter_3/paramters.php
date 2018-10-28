<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/28
 * Time: 9:56
 */
    // 以下代码测试传入多个参数
    function test() {
        $a = func_get_args();
        var_dump($a);
    }
    test(1, 2, 3);
    $obj = new stdClass();
    $obj->a = 1;
    print_r($obj);
    function test2($obj) {
        $obj->b = 5;
    }
    function test3(& $obj) {
        $obj->c = 10;
    }
    test2($obj);
    print_r($obj);
    test3($obj);
    print_r($obj);