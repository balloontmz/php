<?php

namespace LaravelCore\Oriented;

use Closure;

/**
 * 面向切面编程
 */
interface Middleware
{
    public static function handle(Closure $next);
}