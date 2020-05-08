<?php
header('content-type:text/html;charset=utf-8');
require './functions.php';
//初始化数据库
$link=dbInit();
if (!empty($_POST)){
    $keys = array('stu_name','stu_sex','stu_id','stu_grade','stu_college','stu_class');
    $values = array();
    foreach ($keys as $v) {
        $data = $_POST[$v];
        $values[] = "'$data'"; // 用单引号包裹否则会因数据类型出错 
    }
    if($values[0] == "''"){
        echo '<script language="JavaScript">;alert("姓名不能为空");location.href="./add.php";</script>';
        die;
    }elseif($values[1] != "'男'" && $values[1] != "'女'"){
        echo '<script language="JavaScript">;alert("性别应该为男或女");location.href="./add.php";</script>';
        die;
    }elseif(strlen($values[2]) != 10){
        echo '<script language="JavaScript">;alert("学号必须为8位");location.href="./add.php";</script>';
        die;
    }elseif(strlen($values[3]) != 6){
        echo '<script language="JavaScript">;alert("年级必须为4位");location.href="./add.php";</script>';
        die;
    }elseif($values[4] == "''"){
        echo '<script language="JavaScript">;alert("学院不能为空");location.href="./add.php";</script>';
        die;
    }elseif($values[5] == "''"){
        echo '<script language="JavaScript">;alert("班级不能为空");location.href="./add.php";</script>';
        die;
    }
    $sql1='insert into student values ('.$values[3].','.$values[2].','.$values[0].','.$values[1].','.$values[4].','.$values[5].');';
    $sql2='insert into user values ('.$values[2].','.$values[2].','.$values[2].',"student");';
    $sql3='create table homework.'.$_POST['stu_id'].' (course_id varchar(5));';
    if (query($link,$sql1)&&query($link,$sql2)&&query($link,$sql3)){
        echo '<script language="JavaScript">;alert("添加成功");location.href="./showlist_data.php?u_name=root&identify=root";</script>';
        die;
    }else{
        die('fail');
    }
}