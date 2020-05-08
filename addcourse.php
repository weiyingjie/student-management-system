<!-- 修改学生信息 -->
<html>
<head>
<meta charset="utf-8">
<title>添加课程信息</title>
<script>
        function cancel(){window.location.href='./course.php';};
</script>
<style>
body{background-color:#f2eada;margin:0;padding:0;background-image : url(./images/bg_root.jpg);background-repeat : no-repeat;background-size:100% 100%}
.showlist {width:40%;margin:50px auto;padding:20px;border:1px solid #0099ff;background-color:#eee;
    -moz-border-radius: 40px;-webkit-border-radius: 40px;border-radius: 40px;
   filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;}
.showlist h1{font-family:"黑体";font-size:35px;text-align:center;padding-bottom:10px;}
.showlist .list{margin:30px 135px;}
.showlist .list td{font-family:"黑体";font-size:25px;width:40%;}
.showlist .list #stu_sex,#stu_id{font-family:"宋体";font-size:20px;border:1px solid #0099ff;background-color:#fff;}
.showlist .list #tip{font-family:"宋体";font-size:13px;color: red;}
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
   <h1>添加课程信息</h1>
   <form action="./addcourse_data.php" method="post">
        <table class="list">
            <tr><td>课程号&nbsp;&nbsp;</td><td><input type="text" name="course_id" ></td><td id="tip">*输入数字如“ 1 ”</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>课程名&nbsp;&nbsp;</td><td><input type="text" name="course_name" ></td><td id="tip">*输入课程名</td></tr>
            <tr><td>&nbsp;</td></tr>
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