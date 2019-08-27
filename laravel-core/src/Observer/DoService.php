<?php

namespace LaravelCore\Observer;

class DoService
{
    public function do(Event $event)
    {
        $event->add(new Observer1());
        $event->add(new Observer2());
    }
}