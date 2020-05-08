<?php
header('content-type:text/html;charset=utf-8');
// 导入functions
require './functions.php';
// 连接数据库
$link = dbInit();

if(!empty($_POST)){
    $keys = array('hidden','npw1','npw2');
    $values = array();
    foreach ($keys as $v) {
        $data = $_POST[$v];     
        $values[] = "'$data'";    
    }
    if($values[1] == "''"){
        echo '<script language="JavaScript">alert("请输入新密码");location.href="./forget2.php?u_name="+'.$values[0].'; </script>';
        die;
    }elseif($values[2] == "''"){
        echo '<script language="JavaScript">alert("请确认新密码");location.href="./forget2.php?u_name="+'.$values[0].'; </script>';
        die;
    }elseif($values[1] != $values[2]){
        echo '<script language="JavaScript">alert("两次输入不一致");location.href="./forget2.php?u_name="+'.$values[0].'; </script>';
        die;
    }
    $sql = 'update user set passwd = '.$values[2].' where username = '.$values[0].';';
    if ($res = query($link,$sql)){
        if(isset($_GET['identify'])&&$_GET['identify']=="student"){
            echo '<script language="JavaScript">alert("修改成功");location.href="./showlist_data.php?u_name='.$_GET['u_name'].'&identify='.$_GET['identify'].'"; </script>';
            die;
        }else{
            echo '<script language="JavaScript">alert("修改成功，请重新登录");location.href="./index.php"; </script>';
            die;
        } 
    }else{
        die('fail');
    }
}