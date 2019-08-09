获取函数的参数数组、指定的参数、参数个数
func_get_args
func_get_arg
func_num_args
var_dump($some)  获取参数列表的相关信息。可以通过以上几个函数组合起来实现

apache 跨域问题，修改 http-vhost.conf 文件

对没错就是这样的，php2.4+中是把Order deny,allow Deny from all两项合并为Require all denied的。
好那么现在我将Require all denied改为允许状态Require all granted。然后重启Apache，

```
#<Directory />
   # AllowOverride none
   # Require all denied
#</Directory>
```
注释之后，再修改下面的路径为自己要访问的目录下，就OK了。
```
DocumentRoot "/data/server/apache/htdocs/"
<Directory "/data/server/apache/htdocs/">
    Options Indexes FollowSymLinks
    AllowOverride none
    Require all granted
</Directory>
```