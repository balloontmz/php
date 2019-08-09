<?php

namespace DesignPatterns\Creational\Multition;

/**
 * 多例模式，由于 php 不是常驻内存，所以并不需要。
 * 对于常驻内存的语言，多例模式应该有其必要的地方
 * final 无法被继承
 */
final class Multition
{
    const INSTANCE_1 = '1';
    const INSTANCE_2 = '2';

    private static $instances = [];

    /**
     * 私有化构造函数，使其无法被外部新建
     */
    private function __construct(){}
        
    public static function getInstance(string $instanceName): self
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new self();
        }

        return self::$instances[$instanceName];
    }

    /**
     * 阻止对象被克隆
     */
    private function __clone()
    {
    }

    /**
     * 阻止对象被序列化
     */
    private function __wakeup(){}
}