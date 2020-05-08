<?php
require './functions.php';
$link=dbInit();
$sql='insert into `'.$_GET['stu_id'].'` values ('.$_GET['course_id'].');';
if(query($link,$sql)){
    echo '<script language="JavaScript">;alert("选课成功");location.href="./showlist_data.php?u_name='.$_GET['stu_id'].'&identify='.$_GET['identify'].'";</script>';
    die;
}else{
    die('fail');
}