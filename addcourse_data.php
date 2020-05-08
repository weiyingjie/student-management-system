<?php
header('content-type:text/html;charset=utf-8');
require './functions.php';
//初始化数据库
$link=dbInit();
if (!empty($_POST)){
    $keys = array('course_id','course_name');
    $values = array();
    foreach ($keys as $v) {
        $data = $_POST[$v];
        $values[] = "'$data'"; // 用单引号包裹否则会因数据类型出错 
    }
    if($values[0] == "''"){
        echo '<script language="JavaScript">;alert("课程号不能为空");location.href="./addcourse.php";</script>';
        die;
    }elseif($values[1] == "''"){
        echo '<script language="JavaScript">;alert("课程名不能为空");location.href="./addcourse.php";</script>';
        die;
    }
    $sql1='select * from course where course_id='.$values[0];
    $res1=fetchAll($link,$sql1);
    $sql2='select * from course where course_name='.$values[1];
    $res2=fetchAll($link,$sql2);
    if(!empty($res1)||!empty($res2)){
        echo '<script language="JavaScript">;alert("课程号或课程名已存在");location.href="./addcourse.php";</script>';
        die;
    }else{
        $sql='insert into course values ('.$values[0].','.$values[1].');';
        if (query($link,$sql)){
            echo '<script language="JavaScript">;alert("添加成功");location.href="./showlist_data.php?u_name=root&identify=root";</script>';
            die;
        }else{
            die('fail');
        }
    }
    
}