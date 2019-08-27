<?php

namespace LaravelCore\Observer;

class Observer2 implements Observer
{
    public function update($event_info = null)
    {
        echo '观察者2 收到执行通知 执行完毕！\n';
    }
}