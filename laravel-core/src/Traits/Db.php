<?php

namespace LaravelCore\Traits;

class Db 
{
    use Singleton;
    protected function init() {
        print_r('test');
        exit;
    }
}