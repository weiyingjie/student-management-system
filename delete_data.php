<?php
header('content-type:text/html;charset=utf-8');
require './functions.php';
$link = dbInit();// 连接数据库
$id = $_POST['hidden'];
$id = "'$id'";
$sql = 'delete from student where stu_id = '.$id.';';
if ($res = query($link,$sql)){
    echo '<script language="JavaScript">;alert("删除成功！");location.href="./showlist_data.php?u_name="+'.$id.'+"&identify=root";</script>';
    die;
}else{
    die('fail');
}