# 系统时区设置
## 时区划分
整个地球分为24个时区，每个时区都有自己的本地时间。每个时区的本地时间相差1~23个小时。
在国际无线电通信领域，使用一个同一的时间，称为通用协调时间（UTC），UTC与格林尼治
标准时间相同，都与英国伦敦的本地时间相同。

## 时区设置
由于php5 对date 函数进行了重写，因此，目前的日期时间函数比系统时间少了8个小时。在
php语言中默认设置的是标准的格林尼治时间（即采用的是零时区），所以要获取本地当前的
时间必须更改php 语言中的时区设置。
更改php语言中的时区设置有两种方法：
1. 修改php.ini中的<；date.timezone=>选项
2. 在应用程序中，在使用时间日期函数之前添加如下函数：
date_default_timezone_set(timezone);
参数timezone 为 php 可识别的时区名称，如果时区名称 php 无法识别，则采用 utc 时区
php 手册中提供了各时区名称列表。

设置完成后，date()函数便可以正常使用，不会出现时差问题。

如果将程序上传到空间中，那么对系统时区设置时，不能修改php.ini文件，只能使用
date_default_timezone_set()函数对时区进行设置  

# php 日期和时间函数
php提供了大量的内置函数，使开发人员在日期和时间的处理上游刃有余
## 获取本地化时间戳
[获取本地化时间戳、获取当前时间戳](./chapter_10_datetime/example_10.1.php)
mktime 函数将一个时间转换称UNIX的时间戳
时间戳是一个长整数，包含了从UNIX纪元到给定时间的秒数。其参数可以从右向左省略。
该函数的语法格式如下：
int mktime(int hour, int minute, int second, int mouth, int day, int year, int [is_dst])

## 获取当前时间戳
php 通过time() 函数获取当前的UNIX时间戳，返回值为从UNIX纪元到当前时间的秒数
记得采用echo date_default_timezone_set() 函数设置当前时区，否则得到的将是UTC
时间。

## 获取当前日期和时间
[获取当前日期和时间 date getdate 函数, 检验日期的有效性](./chapter_10_datetime/example_10.3.php)
在php 中通过date() 函数获取当前的日期和时间。date() 函数的语法如下：
date(string, int timestamp)
date 函数将返回参数timestamp按照指定格式而产生的字符串。其中的参数timestamp是可选的，
如果省略，则使用当前时间。关于format，以下有几个预定义的常量：
DATE_ATOM               原子钟格式
DATE_COOKIE             Cookie格式
DATE_ISO8601            ISO8601格式
DATE_RFC822             RFC822格式
DATE_RFC850             RFC850格式
DATE_RSS                RSS格式
DATE_W3C                www Consortium 格式

## 获取日期时间

date() 函数返回的是一个格式化的字符串

getdate() 返回的是一个数组

两者都可以传入一个时间戳，如果不传入，则默认为当前时间戳

日期是数据处理中经常使用到的信息之一。本节主要应用getdate()函数 获取日期指定部分的
相关信息

getdate 返回的数组关联索引有：
seconds、minutes、hours、
mday(月份中的天)、wday（星期中的天）、mon（月份数字）、year、yday（年中的第几天）、
weekday（完整文本表示）、mouth（完整文本表示）、0（时间戳）

## 检验日期的有效性
php内置了日期检查函数 checkdate ， checkdate() 函数的语法如下：
bool checkdate(int mouth, int day, int year)
其中，mouth的有效值是1~12，day的有效值为当月的最大天数，year的有效值为1~32767

## 输出格式化的日期和时间
格式化时间函数date() 的format 参数有非常多的可选项。
[文档在此](http://php.net/manual/en/function.date.php)

## 显示本地化的日期时间
apache服务器 conf/httpd-vhost 文件   php项目的相关配置
1. setlocale() 函数可以改变php默认的本地化环境
语法格式如下：
string setlocale(string category, string locale)
如果locale参数为空，就会使用系统环境变量的locale或lang的值。否则就会应用locale参数所指定的本地化环境

2. strftime() 函数
strftime() 函数根据本地化环境设置来格式化输出日期和时间
语法格式如下：
string strftime(string format, int timestamp)
该函数返回用给定的字符串对参数进行格式化输出后的字符串
[示例](./chapter_10_datetime/example_10.7.php)

## 将日期和时间解析为UNIX时间戳
[将日期和时间解析为UNIX时间戳](./chapter_10_datetime/example_10.8.php)
strtotime() 函数，语法如下：
int strtotime(string time[, int now])
其中，string time 为格式化的字符串表示的时间。如果该参数是绝对时间，那么 now 参数不起作用，如果是相对时间，
那么对应的时间就是参数 now 来提供的。如果没有参数 now ，对应的时间就为当前时间。 如果解析失败，则返回false。

# 日期和时间的应用
## 比较两个时间的大小
在实际开发中经常对两个时间的大小进行判断，php中的时间是不可以直接进行比较的。所以，首先要将时间解析为时间
戳的形式，然后再进行比较。strtotime 函数即可完成该操作。

## 实现倒计时功能
strtotime 相当于 date()的反函数
date 得到格式化时间日期 
strtotime 将格式化时间日期转换为时间戳

## 计算页面脚本的执行时间
某些时候需要计算运行时间等比较精确的时间的时候，需要用到microtime()函数。
该函数返回当前的时间，精确到微秒。当php代码启动之前和终止之前各运行一遍，
得到时间的差值就是运行时间。
