<?php

namespace DesignPatterns\Creational\StaticFactory\Tests;

use PHPUnit\Framework\TestCase;
use DesignPatterns\Creational\StaticFactory\StaticFactory;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            'DesignPatterns\Creational\StaticFactory\FormatNumber',
            StaticFactory::factory('number')
        );
    }

    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            'DesignPatterns\Creational\StaticFactory\FormatString',
            StaticFactory::factory('string')
        );
    }

    public function testException()
    {
        $this->expectException(\InvalidArgumentException::class);

        StaticFactory::factory('object');
    }
}