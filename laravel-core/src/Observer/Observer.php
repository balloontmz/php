<?php

namespace LaravelCore\Observer;

interface Observer
{
    public function update($event_info = null);
}