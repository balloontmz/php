<?php

namespace LaravelCore\Oriented;

use Closure;

class VerifyCsrfToken implements Middleware
{
    public static function handle(Closure $next)
    {
        echo '验证 csrf token';
        $next();
    }
}