<?php

namespace DesignPatterns\Structural\Flyweight;

class FlyweightFactory implements \Countable
{
    private $pool = [];

    public function get(string $name): CharacterFluweight
    {
        if (!isset($this->pool[$name])) {
            $this->pool[$name] = new CharacterFluweight($name);
        }
        return $this->pool[$name];
    }

    public function count(): int
    {
        return count($this->pool);
    }
}