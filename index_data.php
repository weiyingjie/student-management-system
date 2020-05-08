<?php
header('content-type:text/html;charset=utf-8');
require './functions.php';
$link = dbInit();// 连接数据库
if (!empty($_POST)){
    $keys = array('u_name','u_passwd');
    $values = array();
    foreach ($keys as $v) {
        $data = $_POST[$v];
        if($data == ''){
            echo "<script language='JavaScript'>;alert('用户名或密码不能为空');location.href='./index.php';</script>";
            die;
        }
        $values[] = "'$data'"; // 用单引号包裹否则会因数据类型出错（密码是string） 
    }
    $username=$values[0];
    $password=$values[1];
    $sql = 'select * from user where username = '.$username.' and passwd = '.$password.';';
    if ($res = query($link,$sql)){
        $row = mysqli_fetch_assoc($res);
        if($row == null){
            echo '<script language="JavaScript">;alert("用户名或密码错误");location.href="./index.php";</script>';
        }else{
            $sql = 'select identity from user where username = '.$username.';';
            $res1 = query($link,$sql);
            $row1 = mysqli_fetch_array($res1);
            $row1[0]="'$row1[0]'";
            echo '<script language="JavaScript">;alert("登录成功");location.href="./showlist_data.php?u_name="+'.$username.'+"&identify="+'.$row1[0].';</script>';
            session_start();
            $_SESSION['userinfo']=array(
                'identify'=>$row1[0],
                'username'=>$username
            );
            if(isset($_POST['auto_login'])&&$_POST['auto_login']=='on'){
                $time=time()+2592000;//保存一个月
                setcookie('username',$username,$time);
                setcookie('password',$password,$time);
            }//保存cookie
        }
        die;
    }else{
        die('fail');
    }
}