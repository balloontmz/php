<?php

namespace DesignPatterns\Behavioral\Mediator;

abstract class Colleague
{
    protected $mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->mediator = $mediator;
    }
}