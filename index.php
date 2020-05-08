<!-- 自动登录选项 -->
<?php 
header('content-type:text/html;charset=utf-8');
require './functions.php';
$link=dbInit();
if (isset($_COOKIE['username'])&&isset($_COOKIE['password'])) {
	$username=$_COOKIE['username'];
	$password=$_COOKIE['password'];
	$sql = 'select passwd from user where username = '.$username.';';
	$res1 = query($link,$sql);
	$row1 = mysqli_fetch_array($res1);
	$row1[0]="'$row1[0]'";
	if($row1[0]==$password){
		$sql = 'select identity from user where username = '.$username.';';
		$res1 = query($link,$sql);
		$row1 = mysqli_fetch_array($res1);
		$row1[0]="'$row1[0]'";
		echo '<script language="JavaScript">;location.href="./showlist_data.php?u_name="+'.$username.'+"&identify="+'.$row1[0].';</script>';
		die;
	}
}
session_start();
if(isset($_SESSION['userinfo'])){
	$login=true;
	$userinfo=$_SESSION['userinfo'];
}else{
	$login=false;
}
if($login){
	echo '<script language="JavaScript">;location.href="./showlist_data.php?u_name="+'.$userinfo['username'].'+"&identify="+'.$userinfo['identify'].';</script>';
}else{
	require './index_html.php';
}
?>