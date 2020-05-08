<!-- 修改学生信息 -->
<?php
header('content-type:text/html;charset=utf-8');
require './functions.php';
//初始化数据库
$link=dbInit();
$sql='select * from student where stu_id = "'.$_GET['stu_id'].'"';
$stu_info = query($link,$sql);
$row = mysqli_fetch_assoc($stu_info);
$sql='select * from user where username = "'.$_GET['stu_id'].'"';
$stu_info1 = query($link,$sql);
$row1 = mysqli_fetch_assoc($stu_info1);
?>
<html>
<head>
<meta charset="utf-8">
<title>修改信息</title>
<script>
    window.setTimeout(
        function(){
            document.getElementById("stu_id").innerHTML= "<?php echo $row['stu_id']; ?>";
            document.getElementById("hidden").value= "<?php echo $row['stu_id']; ?>";
            document.getElementById("stu_sex").innerHTML= "<?php echo $row['stu_sex']; ?>";
        },100);
        function cancel(){window.location.href='<?php echo "./showlist_data.php?u_name=".$_GET['stu_id']."&identify=".$_GET['identify'];?>';};
</script>
<style>
body{background-color:#f2eada;margin:0;padding:0;background-image : url(./images/bg_root.jpg);background-repeat : no-repeat;background-size:100% 100%}
.showlist {width:40%;margin:50px auto;padding:20px;border:1px solid #0099ff;background-color:#eee;
    -moz-border-radius: 40px;-webkit-border-radius: 40px;border-radius: 40px;
   filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;}
.showlist h1{font-family:"黑体";font-size:35px;text-align:center;padding-bottom:10px;}
.showlist .list{margin:50px auto;}
.showlist .list td{font-family:"黑体";font-size:25px;}
.showlist .list #stu_sex,#stu_id{font-family:"宋体";font-size:20px;border:1px solid #0099ff;background-color:#fff;}
.showlist .list input[type="text"]{font-family:"宋体";font-size:20px;width:180px;border:1px solid #0099ff;height:27px;}
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
   <h1>修改信息</h1>
   <form action="<?php echo "./update_data.php?u_name=".$_GET['stu_id']."&identify=".$_GET['identify'];?>" method="post">
        <table class="list">
            <tr><td>姓名&nbsp;&nbsp;</td><td><input type="text" name="stu_name" value=<?php echo $row['stu_name']; ?>></td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>性别&nbsp;&nbsp;</td><td id = "stu_sex"></td></tr>
            <tr><td>&nbsp;</td></tr>
            <input type="hidden" id = "hidden" name = "hidden">
            <tr><td>学号&nbsp;&nbsp;</td><td id = "stu_id"></td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>年级&nbsp;&nbsp;</td><td><input type="text" name="stu_grade" value=<?php echo $row['stu_grade']; ?>></td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>学院&nbsp;&nbsp;</td><td><input type="text" name="stu_college" value=<?php echo $row['stu_college']; ?>></td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>班级&nbsp;&nbsp;</td><td><input type="text" name="stu_class" value=<?php echo $row['stu_class']; ?>></td></tr>
            <?php 
                if(isset($_GET['identify'])&&$_GET['identify']=="student"){
                    echo "<tr><td>&nbsp;</td></tr>";
                    echo "<tr><td>手机号&nbsp;&nbsp;</td><td><input type='text' name='phonenum' value=".$row1['phonenum']."></td></tr>";
                }
            ?>
        </table>
        <table class="showlist_button">
            <tr><td colspan="2" align=center>
            <input class="button" type="submit" value="提交">
            <input class="button" type="button" value="取消" onclick=cancel()>
            </td></tr>
        </table>
    </form>
</body>
</html>