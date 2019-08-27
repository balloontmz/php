<?php

namespace LaravelCore\Observer;

class Observer1 implements Observer
{
    public function update($event_info = null)
    {
        echo '观察者 1 收到执行通知 执行完毕！\n';
    }
}