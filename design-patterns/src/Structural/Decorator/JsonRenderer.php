<?php

namespace DesignPatterns\Structural\Decorator;

class JsonRenderer extends RenderDecorator
{
    public function renderData(): string
    {
        return json_encode($this->wrapped->renderData());
    }
}