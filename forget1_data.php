<?php
header('content-type:text/html;charset=utf-8');
// 导入functions
require './functions.php';
// 连接数据库
$link = dbInit();
if(!empty($_POST)){
    $keys = array('u_name','u_num');
    $values = array();
    foreach ($keys as $v) {
        $data = $_POST[$v];
        
        $values[] = "'$data'";
        
    }
    if($values[0] == "''"){
        echo '<script language="JavaScript">alert("用户名不能为空");location.href="./forget1.php?u_name="+'.$values[0].'; </script>';
        die;
    }elseif($values[1] == "''"){
        echo '<script language="JavaScript">alert("手机号不能为空");location.href="./forget1.php?u_name="+'.$values[0].'; </script>';
        die;
    }
    $sql = 'select * from user where username = '.$values[0].' and phonenum = '.$values[1].';';
    if ($res = query($link,$sql)){
        $row = mysqli_fetch_assoc($res);
        if($row == null){
            echo '<script language="JavaScript">alert("手机号不正确");location.href="./forget1.php?u_name="+'.$values[0].'; </script>';
        }else{
            echo '<script language="JavaScript">alert("验证成功");location.href="./forget2.php?u_name="+'.$values[0].'; </script>';
        }
        die;
    }else{
        die('fail');
    }
}