<?php

namespace LaravelCore\Ioc;

class FileLog implements Log
{
    public function write()
    {
        echo 'file log write...';
    }
}