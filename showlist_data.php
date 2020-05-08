<?php
header('content-type:text/html;charset=utf-8');
require './functions.php';
//初始化数据库
$link=dbInit();
//设置常量，用以判断视图页面是否由此页面加载
define('APP', 'itcast');
//加载视图页面，显示数据
if(isset($_GET['identify'])){
    if($_GET['identify']=="root"){
        $sql='select * from student';
        $stu_info = fetchAll($link,$sql);
        require './showlist_root.php';
    }else{
        $sql='select * from student where stu_id = "'.$_GET['u_name'].'"';
        $stu_info = fetchAll($link,$sql);
        require './showlist_student.php';
    }
}
if(isset($_GET['keyword'])){       //
    $sql='select * from student';
    $stu_info = fetchAll($link,$sql);
    require_once './showlist_root.php';
}

if(isset($_GET['exit'])){
    setcookie('username','',time()-1);
    setcookie('password','',time()-1);
    session_start();
    unset($_SESSION['userinfo']);
    if(empty($_SESSION)){
        session_destroy();
    }
    echo '<script language="JavaScript">;alert("退出成功！");location.href="./index.php";</script>';
}//清除cookie

