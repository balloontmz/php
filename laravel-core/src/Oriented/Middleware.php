<?php

namespace LaravelCore\Oriented;

use Closure;

interface Middleware
{
    public static function handle(Closure $next);
}