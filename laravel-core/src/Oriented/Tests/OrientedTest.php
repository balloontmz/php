<?php

namespace LaravelCore\Oriented\Tests;

use LaravelCore\Oriented\Middleware;
use LaravelCore\Oriented\SetCookie;
use LaravelCore\Oriented\VerifyAuth;
use LaravelCore\Oriented\VerifyCsrfToken;
use PHPUnit\Framework\TestCase;

class OrientedTest extends TestCase
{
    public function testOriented()
    {
        $call_middware = function () {
            SetCookie::handle(function (){
                VerifyAuth::handle(function() {
                    $handle = function() {
                        echo '当前要执行的程序!';
                    };
                    VerifyCsrfToken::handle($handle);
                });
            });
        };

        $this->assertNull($call_middware());
    }

    public function testOrientedAdvanced()
    {
        $handle = function() {
            echo '当前要执行的操作';
        };

        $pipeArr = [
            VerifyCsrfToken::class,
            VerifyAuth::class,
            SetCookie::class,
        ];

        $callback = array_reduce($pipeArr, function($stack, $pipe){
            return function()use($stack, $pipe){
                return $pipe::handle($stack);
            };
        }, $handle);

        $this->assertNull(call_user_func($callback));
    }
}