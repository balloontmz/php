# laravel-core laravel 框架核心

`composer require psr/http-message`

`vendor/laravel/framework/src/Illuminate/Foundation/Application.php`  这个目录包含 laravel 别名到接口以及类实现的映射

`Foundation Support` 框架下两个文件夹、查找功能类和函数以此为起点寻找

核心就是提供了绑定这些类和函数的一个容器

## Ioc 容器和服务提供者
绑定别名到容器的的实例和
绑定接口到容器中的实例

## 面向接口编程

## Facades 门面模式的实现

## 面向切面编程 -- 中间件实现
`array_reduce call_user_func ` 两个函数为实现该模式的核心函数

[array_reduce](https://www.php.net/manual/zh/function.array-reduce.php)

[call_user_func](https://www.php.net/manual/zh/function.call-user-func.php)

从基类继承的成员会被 trait 插入的成员所覆盖。优先顺序是来自当前类的成员覆盖了 trait 的方法，而 trait 则覆盖了被继承的方法。