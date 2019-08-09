<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/28
 * Time: 16:22
 */
    if (strlen($_POST['pwd']) < 6) {
        echo "<script>alert('用户密码的长度不得少于6位!请重新输入');history.back();</script>";
    } else {
        echo "用户信息输入合法！";
    }