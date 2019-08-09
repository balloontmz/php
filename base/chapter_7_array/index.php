<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/29
 * Time: 17:32
 */
?>
<form action="example_multi_file_upload.php" method="post" enctype="multipart/form-data" name="form1">
    <tr>
        <td width="88" height="30" align="right">内容：1</td>
        <td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
    </tr>
    <tr>
        <td width="88" height="30" align="right">内容：2</td>
        <td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
    </tr>
    <tr>
        <td width="88" height="30" align="right">内容：3</td>
        <td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
    </tr>
    <tr>
        <td width="88" height="30" align="right">内容：4</td>
        <td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
    </tr>
    <tr>
        <td width="88" height="30" align="right">内容：5</td>
        <td width="369"><input name="picture[]" type="file" id="picture[]" size="30"></td>
    </tr>
    <tr>
        <td><input type="image" name="imageField" src="../chapter_5_str_manipulation/uploads/one.jpg"></td>
    </tr>
</form>
