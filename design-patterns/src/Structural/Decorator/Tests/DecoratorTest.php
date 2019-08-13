<?php

namespace DesignPatterns\Structural\Decorator\Tests;

use DesignPatterns\Structural\Decorator\JsonRenderer;
use DesignPatterns\Structural\Decorator\Webservice;
use DesignPatterns\Structural\Decorator\XmlRenderer;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    private $service;

    protected function setUp(): void
    {
        $this->service = new Webservice('foobar');
    }

    /**
    * 测试 JSON 装饰者。
    * 这里的 assertEquals 是为了判断返回的结果是否符合预期。
    */
    public function testJsonDecorator()
    {
        $service = new JsonRenderer($this->service);

        $this->assertEquals('"foobar"', $service->renderData());
    }

    /**
    * 测试 Xml 装饰者。
    */
    public function testXmlDecorator()
    {
        $service = new XmlRenderer($this->service);

        $this->assertXmlStringEqualsXmlString('<?xml version="1.0"?><content>foobar</content>', $service->renderData());
    }
}