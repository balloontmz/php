<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/28
 * Time: 11:29
 */
    $name = array("1"=>"智能机器人","2"=>"数码相机","3"=>"天翼手机","4"=>"瑞士手表");
    $price = array("1"=>"1234元","2"=>"2234元","3"=>"2148元","4"=>"4235元");
    $counts = array("1"=>1,"2"=>2,"3"=>2,"4"=>1);
    echo '<table width="580" border="1" bordercolor="#ffffff" cellpadding="1" cellspacing="1" bgcolor="#c17e50">
        <tr>
            <td width="145" align="center" bgcolor="#fffff">商品名称</td>
            <td width="145" align="center" bgcolor="#fffff">价 格</td>
            <td width="145" align="center" bgcolor="#fffff">数量</td>
            <td width="145" align="center" bgcolor="#fffff">金额</td>
        </tr>';
    foreach ($name as $key=>$value) {
        echo '<tr>
                   <td height="25" align="center" bgcolor="#fffff">'.$value.'</td>
                   <td  align="center" bgcolor="#fffff">'.$price[$key].'</td>
                   <td  align="center" bgcolor="#fffff">'.$counts[$key].'</td>
                   <td  align="center" bgcolor="#fffff">'.$price[$key]*$counts[$key].'</td>
               </tr>';
    }
    echo '</table>';

