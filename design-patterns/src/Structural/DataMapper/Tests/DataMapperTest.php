<?php

namespace DesignPatterns\Structural\DataMapper\Tests;

use DesignPatterns\Structural\DataMapper\StorageAdapter;
use DesignPatterns\Structural\DataMapper\User;
use DesignPatterns\Structural\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([
            1 => [
                'username'=> 'tom',
                'email'=>'1@1.com',
            ]
        ]);
        $mapper = new UserMapper($storage);
        $user = $mapper->findById(1);
        $this->assertInstanceOf(User::class, $user);
    }

    public function testWillNotMapInvalidData()
    {
        // \InvalidArgumentException::class
        $this->expectException('\InvalidArgumentException');

        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);
        $mapper->findById(1);
    }
}