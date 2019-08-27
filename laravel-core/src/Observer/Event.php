<?php

namespace LaravelCore\Observer;

class Event
{
    protected $observers;

    public function add(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function trigger()
    {
        $this->notify();
    }
}