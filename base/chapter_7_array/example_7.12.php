<?php
/**
 * Created by PhpStorm.
 * User: tomtiddler
 * Date: 2018/10/29
 * Time: 16:21
 */
    $name = "智能机器人@数码相机@天翼手机@瑞士手表";             // 定义字符串
    $price = "14998@2588@2666@66698";
    $counts = "1@2@3@4";
    $arrayid = explode("@", $name);                   // 将商品ID的字符串转换到数组中
    $arraynum = explode("@", $price);                 // 将商品价格的字符串转换到数组中
    $arraycount = explode("@", $counts);              // 将商品数量的字符串转换到数组中
    if (isset($_POST['Submit']) && $_POST['Submit'] == true) {
        $id = $_POST['name'];
        $num = $_POST['counts'];
        $key = array_search($id, $arrayid);
        $arraycount[$key] = $num;
        $counts = implode("@", $arraycount);
    }
    ?>
<table width="580" border="1" cellpadding="1" bordercolor="#ffffff" bgcolor="#c17e50">
    <tr>
        <td width="145" align="center" bgcolor="#ffffff">商品名称</td>
        <td width="145" align="center" bgcolor="#ffffff">价格</td>
        <td width="145" align="center" bgcolor="#ffffff">数量</td>
        <td width="145" align="center" bgcolor="#ffffff">金额</td>
    </tr>
    <?php
    for ($i=0; $i<count($arrayid); $i++) {
        ?>
    <form name="form1_<?php echo $i;?>" method="post" action="example_7.12.php">
        <tr>
            <td height="25" align="center" bgcolor="#ffffff"><?php echo $arrayid[$i]; ?></td>
            <td align="center" bgcolor="#ffffff"><?php echo $arraynum[$i]; ?></td>
            <td align="center" bgcolor="#ffffff">
                <input name="counts" type="text" value="<?php echo $arraycount[$i]; ?>" size="8">
                <input name="name" type="hidden" value="<?php echo $arrayid[$i]; ?>" size="8">
                <input name="Submit" type="submit" value="更改" size="8">
            </td>
            <td align="center" bgcolor="#ffffff"><?php echo $arraycount[$i] * $arraynum[$i]; ?></td>
        </tr>
    </form>
    <?php
    }
    ?>
</table>