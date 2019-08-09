<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/29
 * Time: 17:23
 */
    if (!is_dir("./upfile")) {
        mkdir("./upfile");
    }
    $array = array_unique($_FILES['picture']['name']);
    foreach ($array as $k=>$v) {
        $path = "upfile/".$v;
        if ($v) {
            if (move_uploaded_file($_FILES['picture']['tmp_name'][$k], $path)) {
                $result = true;
            } else {
                $result = false;
            }
        }
    }
    if ($result == true) {
        echo "文件上传成功，请稍等。。。";
        echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">";
    } else {
        echo "文件上传失败，请稍等。。。";
        echo "<meta http-equiv=\"refresh\" content=\"3;url=index.php\">";
    }