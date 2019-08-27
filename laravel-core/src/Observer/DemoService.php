<?php

namespace LaravelCore\Observer;

class DemoService
{
    public function demo()
    {
        $event = new DoService(new Event());  // 此处注册事件

        $event->trigger(); // 事件通知
    }
}