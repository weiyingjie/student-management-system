<?php
require './functions.php';
$link=dbInit();
$sql='delete from `'.$_GET['stu_id'].'` where course_id='.$_GET['course_id'].';';
if(query($link,$sql)){
    echo '<script language="JavaScript">;alert("退课成功");location.href="./showlist_data.php?u_name='.$_GET['stu_id'].'&identify='.$_GET['identify'].'";</script>';
    die;
}else{
    die('fail');
}