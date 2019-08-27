<?php

namespace LaravelCore\Ioc;

class UserFacade
{
    protected static $ioc;

    public static function setFacadeIoc($ioc)
    {
        static::$ioc = $ioc;
    }

    protected static function getFacadeAccessor()
    {
        return User::class;
    }
    
    public static function __callStatic($name, $arguments)
    {
        $instance = static::$ioc->make(static::getFacadeAccessor());
        return $instance->$name(...$arguments);
    }
}