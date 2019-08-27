<?php

namespace LaravelCore\Ioc\Tests;

use LaravelCore\Ioc\Ioc;
use PHPUnit\Framework\TestCase;

class IocTest extends TestCase
{
    public function testIoc()
    {
        $ioc = new Ioc();
        $ioc->bind('LaravelCore\Ioc\Log', 'LaravelCore\Ioc\FileLog');
        $ioc->bind('LaravelCore\Ioc\User', 'LaravelCore\Ioc\User');
        $user = $ioc->make('LaravelCore\Ioc\User');
        $this->assertTrue($user->login());
    }
}