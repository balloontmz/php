# 字符串的定义方法
## 采用单引号和双引号定义字符串
1. 采用双引号的字符串，该字符串内部的变量会被解析。如果需要不被解析，则需要转义
2. 采用单引号的字符串，该字符串内部的变量不会被解析。所见即所得。只需要转义内部的单引号即可。
```php
<?php
    $test = "PHP";
    $str = "I Like $test";
    $str2 = 'I Like $test';
    echo $str;                  // I Like PHP
    echo $str2;                 // I Like $test
```
3. 使用定界符定义字符串
定界符用于定义格式化大文本，格式化是指文本中的格式将被保留所以文本中不需要转义字符。在使用时后接一个标识符，
然后是格式化文本，最后是同样的标识符结束字符串。格式如下：
```php
<<<str
    格式化文本
    str;
```
其中，符号“<<<”是关键字，必须使用；str 为用户自定义的标识符，用于定义文本的起始标识符和结束标识符，前后的
标识符名称必须完全相同。结束标识符必须从行的第一列开始，而且也必须遵循php其他任何标签的命名规则：只能包含字
母、数字、下划线，而且必须以下划线或非数字字符开始。

值得注意的是，在定界符内不允许添加注释，否则程序将运行出错。结束标识符所在的行不能包含任何其它字符，而且不能
被缩进，在标识符分号前后不能有任何空白字符或者制表符。如果破坏了这条规则，php将不会视其为结束标识符。
# 字符串操作

## 去除字符串首位空格和特殊字符
[去除首尾空白字符](./chapter_5_str_manipulation/example_5.1.php)
1. trim()函数：去除左右两边的空白字符，如需去除特定字符，则需要传第二个参数，即希望过滤的参数集合字符串
2. ltrim()函数：去除左边的制定字符，默认为空白字符
3. rltrim()函数：去除右边的制定字符，默认为空白字符

## 转义、还原字符串数据
[转义、还原字符串数据](./chapter_5_str_manipulation/exampel_5.5.php)
1. 使用转义字符进行字符串的转义“\”
2. 自动转义，还原字符串数据
    1. addslashes()函数，将传入的str进行转义。返回的字符串中，为了数据库查询等的需要在某些字符面前加上了反斜线，
    如：单引号，双引号，反斜线，NUL等。
    2. stripslashes()函数，将字符串反转义，去除转义字符。

所有数据在插入数据库之前，有必要应用 addslashes 函数进行字符串转义，以免特殊字符未经转义在插入数据库时出现错误。
另外，对于使用 addslaches 函数实现的自动转义字符串可以使用stripslashes 函数进行还原，但数据在插入数据库之前必须
进行再次转义。

1. addcslashes() 函数，接收第二个参数，为字符串中的指定字符集合做转义操作
2. stripcslashes() 函数， 反转义addcslashes函数转义的字符串

在缓存文件中，一般对缓存数据的值采用addcslashes()函数进行指定范围的转义

## 获取字符串的长度
strlen 函数
汉字占用两个字符，英文，数字，小数点，下划线和空格占一个字符。
strlen($str) 在获取字符串长度的同时，也可以用来检测字符串的长度。
利用$_POST全局变量收集表单数据。并返回一个js脚本。
[一个简单的小测试](./chapter_5_str_manipulation/a_little_test)

## 截取字符串
[截取字符串](./chapter_5_str_manipulation/example_5.9.php)
string substr(string str, int start [, int length])函数截取指定长度字符
str:待截取的字符串
start：指定开始截取的位置。如果参数start为负数，则从字符串的末尾开始截取
length：可选参数，指定截取字符的个数，如果lenth为负数，则表示取到倒数第length个字符。
start去正数时，指定位置从零开始计算的。
start 和 length 没有必然的正负关系，但是需要合理

web开发中，经常需要对一些超长文本进行部分显示。

## 比较字符串
[比较字符串](./chapter_5_str_manipulation/example_5.11.php)
1. 按字节进行字符串的比较
分别是strcmp() 和 strcasecmp() 函数，通过这两个函数即可实现对字符串进行按字节的比较。
strcasecmp指不区分大小写。

2. 按自然排序法进行比较
strnatcmp 区分大小写。将字符串中的字符按照从左到右的顺序进行比较，如果是数字就直接
比较大小，如果是ascii码，则比较ascii码的值

3. 指定从源字符串的位置开始比较
strncmp()函数用来比较字符串中的前n个字符。
语法格式如下：
int strncmp(string str1, string str2, int len)

如果字符串str1 和 str2 相等，则返回0；如果str1 大于 str2，则返回值大于0；如果str1 小于 str2，则返回值小于0

## 检索字符串
1. 使用 strstr() 函数查找指定的关键字。
语法格式如下：
string strstr(string haystack, string needle)   该函数区分大小写，返回第一个找到的needle到原字符串尾部的子字符串。
[通过对字符串的检索获取扩展名用来判断是否是合格的文件，从而实现一个简单的文件上传表单](./chapter_5_str_manipulation/example_5.14.php)
strrchr()正好和strstr函数相反，从后序检索子串。

2. 使用 sub_count() 函数检索子串出现的次数
语法格式如下：
int sub_str(string haystack, string needle)
```php
$str = "明日编程词典";                    // 定义字符串常量
echo substr_count($str, "词");           // 输出查询的字符串出现的次数--汉字对应两个以上字节。
```
检索子串一般出现在搜索引擎中，针对子串在字符串中出现的次数进行统计，便于用户第一时间掌控子串在字符串中出现的次数。

## 替换字符串

[str_ireplace str_replace substr_replace 三个函数的简单使用。前两个函数相当于简单的字符替换，只要满足替换条件，均替换。
sub则指定了替换位置，一个函数只替换一次，就是在函数指定的位置。](./chapter_5_str_manipulation/example_5.16.php)
1. 两个函数 str_ireplace() （忽略大小写）和 str_replace() （不忽略大小写）,
语法格式如下：
mixed str_ireplace(mixed search, mixed replace, mixed subject[, int &count])
将所有在参数 subject 中出现的 参数search 用 replace 代替， 参数&count表示执行的次数。该函数不区分大小写

字符串替换技术最常用的就是搜索引擎的关键字处理，将搜索的关键字进行描红等操作
查询关键字描红功能在搜索引擎上被广泛运用。

2. substr_replace() 函数
该函数用于对指定字符串中的部分字符串进行替换。
语法格式如下：
mixed substr_replace(mixed string, mixed repl, mixed start[, mixed length])
string: 指定要操作的原始字符串，可以是字符串或数组
repl: 指定替换后的新字符串
start: 指定替换字符串开始的位置。正数表示从第start位置开始，负数表示从倒数第start位置开始
length: 可选参数，指定返回字符串的长度。正数表示被截取的字符串的长度，负数表示待替换的字符串结尾的倒序序号，
0代表插入到string的start位置处
note: 如果参数start设置为负值，而参数length数值小于或者等于start数值，那么length参数自动为0.

## 格式化字符串
### 字符串的格式化

### 数字的格式化
number_format 函数用来将数字字符串格式化
语法格式如下：
string number_format(float number[, int decimals[, string dec_point[, sting thousands_sep]]])
number 表示要格式化的数字
decimals 为要保留的小数位数
dec_point 为指定小数点显示的字符
thousands_sep 为指定千分分隔符显示的字符
该函数不能传入三个参数，也就是dec_point 和 thousands_sep 参数必须同时存在或者同时不在

## 分割、合成字符串
[分割合成字符串](./chapter_5_str_manipulation/example_5.19.php)
1. 字符串的分割是通过explode函数实现的。explode函数按照制定的规则对一个字符串进行分割，返回值为数组
语法格式如下：
array explode(string delimiter, string str[, int limit])
delimiter 边界上的分割字符
str 必要参数，指定将被分割的字符串
limit 可选参数，指定返回的数组最多包含的元素个数，最后一个元素将包含str的剩余部分。如果是负数，则返回除了
最后limit个元素外的所有元素，如果是0，则默认为1

输出数组元素除了使用 print_r 函数外，还可以使用echo输出，不过echo只能输出简单的数据类型，所以需要手动取值 

2. 合成字符串
implode 函数可以将数组的内容组合成一个新的字符串
语法格式如下：
string implode(string glue, array pieces)
glue 表示字符串，指定分隔符，如果不传入，将直接省略。
pieces 表示要合并的数组，如果不传入glue，则此参数作为唯一参数传入
和 explode 相对应。