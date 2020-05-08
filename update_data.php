<?php
header('content-type:text/html;charset=utf-8');
require './functions.php';
$link = dbInit();// 连接数据库
if($_GET['identify']=="student"){
    if (!empty($_POST)){
        $keys = array('hidden','stu_name','stu_grade','stu_college','stu_class','phonenum');
        $values = array();
        foreach ($keys as $v) {
            $data = $_POST[$v];
            $values[] = "'$data'";
        }
        if($values[1] == "''"){
            echo '<script language="JavaScript">;alert("姓名不能为空");location.href="./update.php?stu_id="+'.$_POST['hidden'].'&identity='.$_GET['identify'].';</script>';
            die;
        }elseif($values[2] == "''"){
            echo '<script language="JavaScript">;alert("年级不能为空");location.href="./update.php?stu_id="+'.$_POST['hidden'].'&identity='.$_GET['identify'].';</script>';
            die;
        }elseif($values[3] == "''"){
            echo '<script language="JavaScript">;alert("学院不能为空");location.href="./update.php?stu_id="+'.$_POST['hidden'].'&identity='.$_GET['identify'].';</script>';
            die;
        }elseif($values[4] == "''"){
            echo '<script language="JavaScript">;alert("班级不能为空");location.href="./update.php?stu_id="+'.$_POST['hidden'].'&identity='.$_GET['identify'].';</script>';
            die;
        }elseif($values[5] == "''"){
            echo '<script language="JavaScript">;alert("手机号不能为空");location.href="./update.php?stu_id="+'.$_POST['hidden'].'&identity='.$_GET['identify'].';</script>';
            die;
        }
        $sql1 = 'update student set stu_name = '.$values[1].',stu_grade = '.$values[2].',stu_college = '.$values[3].',stu_class = '.$values[4].'  where stu_id = '.$values[0].';';
        $sql2 = 'update user set phonenum = '.$values[5].'  where username = '.$values[0].';';
        if (query($link,$sql1)&&query($link,$sql2)){
            echo '<script language="JavaScript">;alert("修改成功！");location.href="./showlist_data.php?u_name='.$_GET['u_name'].'&identify='.$_GET['identify'].'";</script>';
            die;
        }else{
            die('fail');
        }
    }
}else{
    if (!empty($_POST)){
        $keys = array('hidden','stu_name','stu_grade','stu_college','stu_class');
        $values = array();
        foreach ($keys as $v) {
            $data = $_POST[$v];
            $values[] = "'$data'";
        }
        if($values[1] == "''"){
            echo '<script language="JavaScript">;alert("姓名不能为空");location.href="./update.php?stu_id="+'.$_POST['hidden'].';</script>';
            die;
        }elseif($values[2] == "''"){
            echo '<script language="JavaScript">;alert("年级不能为空");location.href="./update.php?stu_id="+'.$_POST['hidden'].';</script>';
            die;
        }elseif($values[3] == "''"){
            echo '<script language="JavaScript">;alert("学院不能为空");location.href="./update.php?stu_id="+'.$_POST['hidden'].';</script>';
            die;
        }elseif($values[4] == "''"){
            echo '<script language="JavaScript">;alert("班级不能为空");location.href="./update.php?stu_id="+'.$_POST['hidden'].';</script>';
            die;
        }
        $sql = 'update student set stu_name = '.$values[1].',stu_grade = '.$values[2].',stu_college = '.$values[3].',stu_class = '.$values[4].'  where stu_id = '.$values[0].';';
        if ($res = query($link,$sql)){
            echo '<script language="JavaScript">;alert("修改成功！");location.href="./showlist_data.php?u_name='.$_GET['u_name'].'&identify='.$_GET['identify'].'";</script>';
            die;
        }else{
            die('fail');
        }
    }
}
