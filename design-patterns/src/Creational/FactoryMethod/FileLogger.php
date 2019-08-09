<?php

namespace DesignPatterns\Creational\FactoryMethod;

class FileLogger implements Logger
{
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(string $msg)
    {
        file_put_contents($this->filePath, $msg . PHP_EOL, FILE_APPEND);
    }
}