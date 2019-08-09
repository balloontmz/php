<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/28
 * Time: 17:26
 */
    if (isset($_POST['action']) && $_POST['action'] == "upload") {
        $file_path = "./uploads\\";
        $picture_name = $_FILES['u_file']['name'];
        $picture_name = strstr($picture_name, ".");
        if ($picture_name != ".jpg") {
            echo "<script>alert('上传图片格式不正确，请重新上传');window.location.href='index.php'</script>";
        } elseif ($_FILES['u_file']['tmp_name']) {
            move_uploaded_file($_FILES['u_file']['tmp_name'], $file_path.$_FILES['u_file']['name']);
            echo "图片上传成功";
        } else {
            echo "上传图片失败";
        }
    }
    ?>
<form method="post" action="example_5.14.php" enctype="multipart/form-data">
    <input type="hidden" name="action" value="upload" />
    <input type="file" name="u_file"/>
    <input type="submit" value="上传" />
</form>
