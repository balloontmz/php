<?php

namespace LaravelCore\Traits\Tests;

use LaravelCore\Traits\Db;
use PHPUnit\Framework\TestCase;

class TraitTest extends TestCase
{
    public function testTrait()
    {
        Db::getInstance();
        $this->assertTrue(true);
    }
}