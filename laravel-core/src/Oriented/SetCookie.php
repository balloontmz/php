<?php

namespace LaravelCore\Oriented;

use Closure;

class SetCookie implements Middleware
{
    public static function handle(Closure $next)
    {
        $next();
        echo '设置 cookie 信息';
    }
}