<?php
header('content-type:text/html;charset=utf-8');
require './functions.php';
$link = dbInit();// 连接数据库
$id = $_GET['course_id'];
$id = "'$id'";
$sql = 'delete from course where course_id = '.$id.';';
if ($res = query($link,$sql)){
    echo '<script language="JavaScript">;alert("删除成功！");location.href="./course.php";</script>';
    die;
}else{
    die('fail');
}