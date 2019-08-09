<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/31
 * Time: 19:17
 */
// example
    class C{
        function __call($name, $arguments) {
            // TODO: Implement __call() method.
            echo "方法名称：".$name."<p>";
            echo "参数存在个数：".count($arguments)."<p>";
            if (count($arguments) === 1) {
                echo $this->list1($arguments);
            }
            if (count($arguments) === 2) {
                echo $this->list2($arguments[0], $arguments[1]);
            }
        }
        public function list1($a) {
            return "这是一个 list1 函数";
        }

        public function list2($a, $b) {
            return "这是一个 list2 函数";
        }
    }
    $a = new C;
    $a->listshow(1, 2);

?>