## laravel 依赖注入

[来源网址](`https://learnku.com/articles/4559/analysis-of-laravel-dependency-injection`)

laravel 容器包含控制反转和依赖注入，使用起来就是先把对象 bind 好，需要的时候直接使用 make 来取就好。

laravel 的依赖注入主要采用的 Route 容器，所以主要在 Controller、Job 这些地方体现。

由 index.php 调用 Kernel ，经过多层 Kernel 管道调用，再到 Router ，经过多层中间件管道调用。最终定位到:`Illuminate/Routing/Route.php`->`run()`->`runController`->`dispatch`->`resolveClassMethodDependencies`->`resolveMethodDependencies`

然后采用`transformDependency`进行对象参数绑定然后注入依赖。

1. 依赖注入原理其实就是利用类方法反射，取得参数类型，然后利用容器构造好实例。然后再使用回调函数调起。
2. 注入对象构造函数不能有参数。否则会报错。Missing argument 1
3. 依赖注入故然好，但它必须要由 Router 类调起，否则直接用 new 方式是无法实现注入的。所以这就为什么只有 Controller 、Job 类才能用这个特性了。