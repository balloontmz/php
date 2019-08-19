<?php

namespace DesignPatterns\Behavioral\State\Tests;

use DesignPatterns\Behavioral\State\ContextOrder;
use DesignPatterns\Behavioral\State\CreateOrder;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    public function testCanShipCreatedOrder()
    {
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        $contextOrder->done();

        $this->assertEquals('shipping', $contextOrder->getStatus());
    }

    public function testCanCompleteShippingOrder()
    {
        $order = new CreateOrder();
        $contextOrder = new ContextOrder();
        $contextOrder->setState($order);
        // 此处运行完成、
        // 根据以下代码判断 。对于多个实例的静态变量的修改，会改变所有类实例
        // print_r('运行前');
        // print_r($contextOrder->getState());
        $contextOrder->done();
        // print_r('运行后');
        // print_r($contextOrder->getState());
        // exit;
        $contextOrder->done();

        $this->assertEquals('completed', $contextOrder->getStatus());
    }
}