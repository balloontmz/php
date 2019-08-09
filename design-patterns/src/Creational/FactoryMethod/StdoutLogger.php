<?php

namespace DesignPatterns\Creational\FactoryMethod;

class StdoutLogger implements Logger
{
    public function log(string $msg)
    {
        echo $msg;
    }
}