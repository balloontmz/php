<?php

namespace LaravelCore\Ioc;

class DatabaseLog implements Log
{
    public function write()
    {
        echo 'database log write...';
    }
}