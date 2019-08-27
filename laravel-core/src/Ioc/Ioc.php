<?php

namespace LaravelCore\Ioc;

use ReflectionClass;

class Ioc
{
    public $binding = [];

    public function bind($abstract, $concrete)
    {
        // 绑定抽象到实现
        $this->binding[$abstract]['concrete'] = function($ioc) use ($concrete) {
            return $ioc->build($concrete);
        };
    }

    public function make($abstract)
    {
        $concrete = $this->binding[$abstract]['concrete'];
        return $concrete($this);
    }

    public function build($concrete)
    {
        $reflector = new ReflectionClass($concrete);
        $constructor = $reflector->getConstructor(); // 获取反射的类的构造函数
        if (is_null($constructor)) { // 如果构造函数为空，代表不需要参数
            return $reflector->newInstance();
        } else {
            $dependencies = $constructor->getParameters(); // 获取依赖的参数列表
            $instances = $this->getDependencies($dependencies);
            return $reflector->newInstanceArgs($instances);
        }
        
    }
    
    protected function getDependencies($paramters)
    {
        $dependencies = [];
        foreach ($paramters as $key => $paramter) {
            $dependencies[] = $this->make($paramter->getClass()->name);
        }
        return $dependencies;
    }
}