# 流程控制
## 条件控制语句
### if else elseif 语句
虽然elseif语句可以进行多重选择，但是使用时十分繁琐。为了避免if语句过于冗长，提高程序的可读性，可以使用switch分支控制语句
[if else elseif switch 语句的简单使用](./chapter_4_flow_control/example_4.1.php)

## 循环控制语句
while先判断条件再进行循环， do while 先进入一次循环再进行判断
[while do while for 循环的例子](./chapter_4_flow_control/example_4.5.php)
### while 循环

### do while 循环

### for 循环
```php
for (初始表达式；条件表达式；迭代表达式) {}
```
初始化表达式在第一次循环时取一次值，条件表达式在每一次循环前求值，迭代表达式在每一次循环结束后进行一次求值

在 for 语句中，无论采用循环变量递增或者递减的方式，前提是一定要保证循环能够结束，无限期的死循环将导致程序的崩溃

### foreach 循环语句
```php
// 第一种格式
foreach ($array as $value) {}
// 第二种格式
foreach ($array as $key=>$value) {}
```
foreach 只能用于数组 和 对象。主要是数组
[采用foreach结合html实现的表格渲染](./chapter_4_flow_control/example_4.8_foreach.php)
                           
当试图使用foreach语句用于其他数据类型或者未初始化的变量时会产生错误。为了避免这个问题，最好使用is_array()函数来先判断
变量是否为数组类型。如果是，再进行其他操作。

## 跳转语句
在使用循环语句时，有时不确定循环的次数，遇到这样的情况可以使用无限循环。当程序代码块满足某个条件后，
采用关键字break 和 continue跳出循环
### break 语句
[break跳出一层和多层循环](./chapter_4_flow_control/example_4.9.php)
break 关键字可以终止当前的循环，包括while、do while、for、foreach、switch在内的所有控制语句。
break不但可以退出当前的循环，还可以指定跳出几重循环。break 不带参数的情况下默认跳出一层循环

### continue 语句
continue关键字的作用没有break强大，它只能终止本次循环而进入到下一次循环中，也可以指定跳出几重循环。