<!-- 修改密码  （加验证码） -->
<html>
<head>
<meta charset="utf-8">
<title>找回密码</title>
<script>
    window.setTimeout(function(){document.getElementById("u_name").innerHTML=<?php echo $_GET['u_name'];?>;
        document.getElementById("hidden").value=<?php echo $_GET['u_name'];?>},100);//要加延时才能显示出来
</script>
<style>
body{background-color:#f2eada;margin:0;padding:0;background-image : url(./images/bg_root.jpg);background-repeat : no-repeat;background-size:100% 100%}
.forget{width:400px;margin:70px auto;padding:30px;border:1px solid #ccc;background-color:#eee;
    -moz-border-radius: 40px;-webkit-border-radius: 40px;border-radius: 40px;
   filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;}
.forget h1{font-family:"黑体";font-size:35px;text-align:center;padding-bottom:10px;}
.table_forget{margin:0 auto;}
.table_forget th{font-family:"微软雅黑";font-size:18px;font-weight:normal;text-align:left;}
.table_forget input[type="password"]{width:180px;border:1px solid #ccc;height:25px;}
.table_forget tr,td{text-align:left;vertical-align:middle;}
.table_forget #u_name{background-color:#ddd;width:170px;border:1px solid #0099ff;height:25px;text-align:center;}
.table_forget_button{margin:0 auto;padding-top:40px}
.table_forget_button .button{
    background-color:#fff;border:2px solid #0099ff;
    color:#0099ff;width:100px;height:30px;margin:0 20px;
    cursor:pointer;border-radius: 8px;}
.table_forget_button .button:hover{
    background-color:#0099ff;border:1px solid #0099ff;
    color:#fff;width:100px;height:30px;margin:0 20px;
    cursor:pointer;border-radius: 8px;}
</style>
</head>
<body>
<div class = "forget">
    <h1>修改密码</h1>
    <form action="<?php if(isset($_GET['identify']))echo './forget2_data.php?u_name='.$_GET['u_name'].'&identify='.$_GET['identify'];else echo './forget2_data.php?u_name='.$_GET['u_name'];?>" method="post">
    <table class="table_forget">
        <input type="hidden" id = "hidden" name = "hidden">
        <tr><th>用户名：</th></tr>
        <tr><td id = "u_name" ></td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><th>新密码：</th></tr>
        <tr><td><input type="password" name = "npw1"/></td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><th>确认新密码：</th></tr>
        <tr><td><input type="password" name = "npw2"/></td></tr>
    </table>
    <table class="table_forget_button" >
        <tr><td colspan="2" align=center>
        <input class="button" type="submit" value="确定" name = "btn_sub"/>
        <input class="button" type="reset" name = "btn_res" />
        </td></tr>
    </table>
    </form>
</div>
</body>
</html>