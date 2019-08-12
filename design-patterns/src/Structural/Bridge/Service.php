<?php

namespace DesignPatterns\Structural\Bridge;

abstract class Service
{
    protected $implementation;

    public function __construct(FormatterInterface $implementation)
    {
        $this->implementation = $implementation;
    }

    public function setImplementation(FormatterInterface $printer)
    {
        $this->implementation = $printer;
    }
    
    abstract public function get();
}