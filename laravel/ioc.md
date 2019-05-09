## 控制反转（Ioc）和依赖注入（DI）

```php
class Flight
{
    // 飞行速度，持续时间
    protected $speed;
    protected $holdtime;
    public function __construct($speed, $holdtime){}
}

class Force
{
    // 力量值
    protected $force;
    public function __construct($force){}
}

class Shot
{
    // 伤害值、射击距离、连发个数
    protected $atk;
    protected $range;
    protected $limit;
    public function __construct($atk, $range, $limit){}
}
```

1. 大量依赖情况示例

```php
class Superman
{
    protected $power

    public function __construct()
    {
        $this->power = new Flight(9, 100);
        // $this->power = new Force(100);
        // $this->power = new Shot(9, 100, 3);
        /*
        $this->power = array(
            new Force(24),
            new Shot(1, 2, 3)
        )
        */
    }
}
```

2. 工厂模式，依赖转移
```php
// 以下这种模式，超人不再依赖超能力类。修改了或者新增了超能力，只需要修改工厂就行了

class SuperModuleFactory
{
    public function makeModule($moduleName, $options)
    {
        switch ($moduleName) {
            case 'Fight': 
                return new Fight($options[0], $options[1]);
            case 'Force': 
                return new Force($options[0]);
            case 'Shot': 
                return new Shot($options[0], $options[1], $options[2]);
            // case 'more': .......
            // case 'and more': .......
            // case 'and more': .......
            // case 'oh no! its too many!': .......
        }
    }
}

class Superman
{
    protected $power;

    public function __construct(array $modules)
    {
        // 初始化工厂
        $factory = new SuperModuleFactory;

        // 通过工厂提供的方法制造需要的模块
        foreach ($modules as $moduleName => $moduleOptions) {
            $this->power[] = $factory->makeModule($moduleName, $moduleOptions);
        }
    }
}

// 创建超人
$superman = new Superman([
    'Fight' => [9, 100],
    'Shot' => [99, 50, 2]
]);
```

3. IoC 容器的重要组成--依赖注入
工厂模式并未解除依赖，只是将依赖改成工厂。工厂缺点：接口未知、产生的对象类型单一。不够灵活

只要不是由内部生产（比如初始化、构造函数 __construct 中通过工厂方法、自行手动 new 的），而是由外部以参数或其他形式注入的，都属于依赖注入（DI）。

```php
interface SuperModuleInterface
{
    /**
     * 超能力激活方法
     *
     * 任何一个超能力都得有该方法，并拥有一个参数
     *@param array $target 针对目标，可以是一个或多个，自己或他人
     */
    public function activate(array $target);
}

/**
 * X-超能量
 */
class XPower implements SuperModuleInterface
{
    public function activate(array $target){}
}

/**
 * 终极炸弹 （就这么俗）
 */
class UltraBomb implements SuperModuleInterface
{
    public function activate(array $target){}
}

class Superman
{
    protected $module;

    public function __construct(SuperModuleInterface $module)
    {
        $this->module = $module;
    }
}
```

4. 更为先进的工厂--IoC容器

**一个粗糙的容器**

```php
class Container
{
    protected $binds;

    protected $instances;

    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof Closure) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }
    }

    public function make($abstract, $parameters = [])
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }

        array_unshift($parameters, $this);

        return call_user_func_array($this->binds[$abstract], $parameters);
    }
}

// 创建一个容器（后面称作超级工厂）
$container = new Container;

// 向该 超级工厂添加超人的生产脚本
$container->bind('superman', function($container, $moduleName) {
    return new Superman($container->make($moduleName));
});

// 向该 超级工厂添加超能力模组的生产脚本
$container->bind('xpower', function($container) {
    return new XPower;
});

// 同上
$container->bind('ultrabomb', function($container) {
    return new UltraBomb;
});

// ****************** 华丽丽的分割线 **********************
// 开始启动生产
$superman_1 = $container->make('superman', 'xpower');
$superman_2 = $container->make('superman', 'ultrabomb');
$superman_3 = $container->make('superman', 'xpower');
// ...随意添加
```

laravel 容器拥有更为高级的容器，能够通过反射实现自动搜寻依赖需求。

5. laravel 核心

