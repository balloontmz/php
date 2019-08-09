<?php

namespace DesignPatterns\Creational\StaticFactory;

class StaticFactory
{
    public static function factory(string $type): FormatterInterface
    {
        if ($type == 'number') {
            return new FormatNumber();
        }
        if ($type == 'string') {
            return new FormatString();
        }

        throw new \InvalidArgumentException('Unknown format type');
    }
}