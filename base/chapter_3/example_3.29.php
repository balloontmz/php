<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/26
 * Time: 18:23
 */
    function come (){                   // 定义一个come() 函数
        echo "<p>";
        echo "来了<p>";
    }
    function go($name="jack"){          // 定义一个go() 函数
        echo $name."走了<p>";
    }
    function back($string){             // 定义 back() 函数
        echo "又回来了，$string<p>";
    }
    $func = "come";                      // 声明一个变量，将变量赋值为come
    $func();                             // 使用变量函数来调用come() ,跟可变变量有类似的功能
    $func = "go";                        // 重新给变量赋值
    $func("Tom");
    $func = "back";
    $func("Lily");