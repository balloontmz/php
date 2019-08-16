<?php

namespace DesignPatterns\Behavioral\Mediator\Tests;

use DesignPatterns\Behavioral\Mediator\Client;
use DesignPatterns\Behavioral\Mediator\Database;
use DesignPatterns\Behavioral\Mediator\Mediator;
use DesignPatterns\Behavioral\Mediator\Server;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld()
    {
        $client = new Client();
        new Mediator(new Database(), $client, new Server());

        $this->expectOutputString('Hello World');
        $client->request();
    }
}