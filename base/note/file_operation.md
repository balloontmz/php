# 文件处理
文件处理包括读取、关闭、重写等，掌握文件的处理需要读者理清思路，掌握文件处理的关键步骤和常用函数，完全可以运用自如。
例如：访问一个文件需要三步：打开文件、读写文件和关闭文件。其他的操作要么是包含在读写文件中，
要么与文件自身的属性有关系。

## 打开、关闭文件
打开、关闭文件使用fopen 函数和 fclose 函数。打开文件应格外认真，一不小心就有可能将文件内容全部删掉。
1. 打开文件
对文件进行操作时首先要打开文件，这是进行数据存取的第一步。
在 php 中使用 fopen() 函数打开文件，fopen 的语法如下：

resource fopen(string filename, string mode[, bool use_include_path])

其中，filename 是要打开的包含路径的文件名，可以是相对路径，也可以是绝对路径，如果没有任何前缀则表示打开的是本地文件；

mode 是打开文件的方式，可取的值如表所示：[查看文档](http://php.net/manual/zh/function.fopen.php)

use_include_path 是可选参数，该参数在配置文件php.ini中指定一个路径，如果希望服务器在这个路径下打开所指定的文件，
可以设置为true

2. 关闭文件

对文件的操作结束后应该关闭这个文件，否则可能引起错误。在 php 中使用 fclose() 函数关闭文件，该函数的语法如下：
bool fclose(resource handle);
该函数将参数 handle 指向的文件关闭，如果成功，返回true。其中的文件指针必须是有效的，并且是通过fopen()函数成
功打开的文件

## 读写文件
相对于打开和关闭文件来说，读写文件更复杂一些。这里主要从读取数据和写入数据

1. 从文件中读取数据
从文件中读取数据，可以读取一个字符、一行字符串或整个文件，还可以读取任意长度的字符串。
    1. [读取整个文件 readfile file 和 file_get_contents](chapter_13_file_operation/example_13.1.php)
        1. readfile 函数
        
            readfile 函数用于读入一个文件并将其写入到输出缓冲，如果出现错误则返回false。语法如下：
            int readfile(string filename)
            使用readfile()函数，不需要打开/关闭文件，不需要输出语句，直接写出文件路径即可。
        2. file 函数
        
            file 函数也可以读取整个文件的内容，只是 file() 函数将文件内容**按行**存放到数组中，包括换行符在内，
            如果失败则返回false。函数语法如下：
            array file(string filename);
            
        3. file_get_contents() 函数
        
            该函数将文件内容 读入一个字符串。如果有 offset 和 maxlen 参数，将在参数 offset 所指定的位置开始
            读取长度为 maxlen 的内容。如果失败，返回 false。函数语法如下：
            string file_get_contents(string filename[, int offset[, int maxlen]])
            该函数适用于二进制对象，是将整个文件的内容读入到一个字符串中的首选方式。
            
    2. 读取一行数据：fgets() 和 fgetss()
        
        [两个函数的区别， fgetss 的过滤效果展示](chapter_13_file_operation/example_13.2.php)
        1. fgets() 函数 用于一次读取一行数据。函数语法如下：
            
            string fgets(resource handle[, int length])
            其中，handler是被打开的文件，
            length 是要读取的数据长度。
            函数能够实现从handle 指定文件中读取一行并返回最大值为length-1个字节的字符串。在遇到换行符、EOF、
            或者读取了length-1个字节后停止。如果忽略了length 参数，那么读取到行结束。
            
        2. fgetss() 函数
            
            string fgetss(resource handle[, int length[, string allowable_tags]])
            fgetss 是 fgets 函数的变体，用于读取一行数据，同时，fgetss 函数会过滤掉被读取内容中的html 和 php 标记
            可以使用 allowable_tags 参数来控制哪些标记不被过滤掉。
            
    3. 读取一个字符：fgetc
        
        [读取一个字符 fgetc ](chapter_13_file_operation/example_13.3.php)
        
        在对某一个字符进行查找、替换时，需要有针对性地对某个字符进行存取，在PHP中可以使用 fgetc 函数实现此功能。
        函数语法如下：
        
        string fgetc(resource handle);
        该函数返回一个字符，该字符从 handle 指向的文件中得到。遇到EOF 则返回false
        
    4. 读取任意长度字符串 fread
        
        [fread 的一个小练习，从此推测，在一次打开中，文件指针不自动重置](chapter_13_file_operation/example_13.4.php)
        
        fread 可以从文件中读取指定长度的数据，函数语法如下：
        string fread(int handle, int length)
        其中，handle为指向的文件资源，length 是要读取的字节数。当函数读取 length 个字节或到达 EOF 时停止执行
        
2. 将数据写入文件
    [fwrite 和 file_put_contents 写入文件](chapter_13_file_operation/example_13.5.php)
    写入数据也是 php 中常用的文件操作，在 php 中使用 fwrite 和 file_put_contents 函数向文件中写入数据。
    fwrite 函数也称为 fputs ，它们的用法相同。 fwrite 函数的语法如下：
    
    int fwrite(resource handle, string string[, int length ])
    
    该函数把内容写入文件指针 handle 处。如果指定了长度 handle ， 则写入length 个字节后停止，如果文件内容长度小于length，
    则会输出全部文件内容
    file_put_contents 语法如下：
    int file_put_contents(string filename, string data[, int flags])
    filename 为写入数据的文件
    data 为要写入的数据
    flags 可以是一系列常量。
    
    使用 file_put_contents 和依次调用 fopen、fwrite、fclose 函数的功能一样。
    
## 操作文件
除了可以对文件内容进行读写，对文件本身同样也可以进行操作，如复制、重命名、查看检查日期等。
常见文件操作函数如下：
bool copy(string path1, sting path2)| 把文件从path1 复制到 path2.如果成功，返回true，失败则返回 false。
bool rename(string filename1, string filename2)| 把filename1文件重命名为filename2
bool ublink(string filename)
int fileatime(string filename)
int filemtime(string filename)
int filesize(string filename)
array pathinfo(string name[, int options])
string realpath(string filename)
array stat(string filename)
[具体的函数及功能查看文档](http://php.net/manual/zh/book.filesystem.php)

# 文件目录处理
目录是一种特殊的文件。要浏览目录下的文件，首先要打开目录，浏览完毕后，同样要关闭目录。
目录处理包括打开目录、浏览目录、关闭目录

## 打开、关闭目录
打开/关闭目录和打开/关闭文件类似。但是打开的文件如果不存在，就自动创建一个新文件，而打开的的文件
路径不正确，则一定会报错。

1. 打开目录
    php 使用 opendir()函数来打开目录，函数语法如下：
    resource opendir(string path)
    函数opendir() 的参数path 是一个合法的目录路径，成功执行返回目录的指针。如果