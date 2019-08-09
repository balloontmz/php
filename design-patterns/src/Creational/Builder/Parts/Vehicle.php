<?php

namespace DesignPatterns\Creational\Builder\Parts;

/**
 * 车辆对象的抽象类
 */
abstract class Vehicle
{
    private $data = [];

    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}