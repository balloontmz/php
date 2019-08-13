<?php

namespace DesignPatterns\Structural\Decorator;

abstract class RenderDecorator implements RenderableInterface
{
    protected $wrapped;

    public function __construct(RenderableInterface $renderer)
    {
        $this->wrapped = $renderer;
    }
}