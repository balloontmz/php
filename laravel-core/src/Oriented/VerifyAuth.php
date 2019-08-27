<?php

namespace LaravelCore\Oriented;

use Closure;

class VerifyAuth implements Middleware
{
    public static function handle(Closure $next)
    {
        echo '验证是否登录';
        $next();
    }
}