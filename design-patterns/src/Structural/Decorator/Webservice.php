<?php

namespace DesignPatterns\Structural\Decorator;

class Webservice implements RenderableInterface
{
    private $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function renderData(): string
    {
        return $this->data;
    }
}