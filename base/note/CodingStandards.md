# php 编码规范
## 什么是编码规范

遵守编码规范的好处如下：
1. 编码规范是对团队开发成员的基本要求
2. 开发人员可以了解任何代码，理清程序的状况
3. 提高程序的可读性，有利于相关设计人员交流，提高软件质量。
4. 防止新接触php的人出于节省时间的需要，自创一套风格并养成终生的习惯
5. 有利于程序的维护，降低软件成本
6. 有利于团队管理，实现团队后备资源的可重用

## php 书写规则
1. 缩进
使用制表符缩进（tab），缩进单位为4个空格左右。

2. 大括号{}
有两种大括号放置规则是可以使用的：
    0. 将大括号放在关键字的下方、同列
    0. 首括号与关键字同行，尾括号与关键字同列。

3. 关键字、小括号、函数、运算符
    1. 尽量不要把小括号和关键字紧贴在一起，要用空格隔开他们
    2. 小括号和函数要紧贴在一起。以便区分关键字和函数。
    3. 运算符与两边的变量或者表达式要有一个空格（点运算除外）。
    4. 当代码段较大时，上下应该加入空白行，两个代码块之间只使用一个空行，禁止使用多行
    5. 尽量不要在return返回语句中使用小括号。
    
## php 命名规则
就一般约定而言，类、函数和变量的名字应该能够让阅读者轻易知道这些代码的作用，应该避免使用模棱两可的命名。

### 类命名
1. 使用大写字母作为词的分隔，其他的字母均使用小写。
2. 名字的首字母使用大写。
3. 不要使用下划线。
例如：SuperMan

### 类属性命名
1. 属性命名应该以字符 m 为前缀。
2. 前缀 m 后采用与类命名一致的规则。
3. m 总是在名字的开头起装饰作用，就像以r开头表示引用一样。
如：mLongString

### 方法命名
方法的作用都是执行一个动作，达到一个目的。所以名称应该说明方法是做什么。一般名称的前缀和后缀都有一定规律，
如Is 判断,Get 得到,Set 设置
方法的命名规范和类命名是一样的。

### 方法中参数命名（形参）
第一个单词的首字母小写，其他单词首字母均大写。

### 变量命名
1. 所有字母都使用小写
2. 使用下划线作为每个单词的分界

### 引用变量（形参）
引用变量要带有r前缀，其他和类属性命名类似

### 全局变量
全局变量应该带有前缀g

### 常量，全局常量
应该全部采用大写字母，单词之间用下划线（_）来分隔。

### 静态变量
静态变量应该带前缀s
如：static $sStatus = 1;

### 函数命名  -- 有别于类内方法
所有的名称都是用小写字母，多个单词使用下划线分隔