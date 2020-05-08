<!-- 查看学生信息 -->
<?php
header('content-type:text/html;charset=utf-8');
require './functions.php';
//初始化数据库
$link=dbInit();
$sql='select * from student where stu_id = "'.$_GET['stu_id'].'"';
$stu_info = query($link,$sql);
$row = mysqli_fetch_assoc($stu_info);
?>
<html>
<head>
<meta charset="utf-8">
<title>查看信息</title>
<script>
    window.setTimeout(
        function(){
            document.getElementById("stu_name").innerHTML= "<?php echo $row['stu_name']; ?>";
            document.getElementById("stu_sex").innerHTML= "<?php echo $row['stu_sex']; ?>";
            document.getElementById("stu_id").innerHTML= "<?php echo $row['stu_id']; ?>";
            document.getElementById("stu_grade").innerHTML= "<?php echo $row['stu_grade']; ?>";
            document.getElementById("stu_college").innerHTML= "<?php echo $row['stu_college']; ?>";
            document.getElementById("stu_class").innerHTML= "<?php echo $row['stu_class']; ?>";
        },100);
</script>
<style>
body{background-color:#f2eada;margin:0;padding:0;background-image : url(./images/bg_root.jpg);background-repeat : no-repeat;background-size:100% 100%}
.showlist {width:40%;margin:50px auto;padding:20px;border:1px solid #0099ff;background-color:#eee;
    -moz-border-radius: 40px;-webkit-border-radius: 40px;border-radius: 40px;
   filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;}
.showlist h1{font-family:"黑体";font-size:35px;text-align:center;padding-bottom:10px;}
.showlist .list{margin:50px auto;}
.showlist .list td{font-family:"黑体";font-size:25px;}
.showlist .list #stu_name,#stu_sex,#stu_id,#stu_grade,#stu_college,#stu_class{font-family:"宋体";font-size:20px;border:1px solid #0099ff;background-color:#fff;width:180px}
.showlist_button{margin:0 auto;padding-top:10px}
.showlist_button .button{
    background-color:#fff;border:2px solid #0099ff;
    color:#0099ff;width:100px;height:30px;margin:0 20px;
    cursor:pointer;border-radius: 8px;}
.showlist_button .button:hover{
    background-color:#0099ff;border:1px solid #0099ff;
    color:#fff;width:100px;height:30px;margin:0 20px;
    cursor:pointer;border-radius: 8px;}
</style>
</head>
<body>
<div class="showlist">
   <h1>个人基本信息</h1>
    <table class="list">
        <tr><td>姓名&nbsp;&nbsp;</td><td id = "stu_name"></td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>性别&nbsp;&nbsp;</td><td id = "stu_sex"></td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>学号&nbsp;&nbsp;</td><td id = "stu_id"></td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>年级&nbsp;&nbsp;</td><td id = "stu_grade"></td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>学院&nbsp;&nbsp;</td><td id = "stu_college"></td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>班级&nbsp;&nbsp;</td><td id = "stu_class"></td></tr>
    </table>
</body>
</html>