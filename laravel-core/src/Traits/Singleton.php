<?php

namespace LaravelCore\Traits;

trait Singleton 
{
    protected static $_instance;

    final public static function getInstance() {
        if(!isset(self::$_instance)) {
            self::$_instance = new static();
        }

        return self::$_instance;
    }

    private function __construct() {
        $this->init();
    }

    //从基类继承的成员会被 trait 插入的成员所覆盖。优先顺序是来自当前类的成员覆盖了 trait 的方法，而 trait 则覆盖了被继承的方法。
    protected function init() {
        print_r('此处为 traits 内');
    }

}