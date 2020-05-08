<html>
<head>
<meta charset="utf-8">
<title>欢迎使用</title>
<script type="text/javascript">
    // 忘记密码函数
    function forget() {
        var result = document.getElementById("u_name").value;  //获取值.     
        window.location.href='./forget1.php?u_name='+result;  //  链接跳转
    }
    function success() {
        var result = document.getElementById("u_name").value;  //获取值.     
        //window.location.href='./showlist.php?u_name='+result;  //  链接跳转
    }
</script>
<style>
body{background-color:#f2eada;margin:0;padding:0;background-image : url(./images/bg.jpg);background-repeat : no-repeat;background-size:100% 100%}
.title{position:fixed;top:0px;border:1px solid #0099ff;width:100%;height:18%;line-height:100%;color:white;font-family: "微软雅黑";
    background-color:#0099ff;font-size: 30px;text-align: center;filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;}
.welcome{position:fixed;left:34%;width:400px;height:400px;-moz-border-radius: 240px;
    -webkit-border-radius: 240px;border-radius: 240px;margin:10% auto;padding:30px;border:1px solid #0099ff;
    background-color:#eee;filter:alpha(Opacity=90);-moz-opacity:0.9;opacity: 0.9;}
.welcome h1{font-family:"微软雅黑";font-size:30px;color:#0099ff;text-align:center;padding-top:20px;padding-bottom:10px;}
.table_login{margin:0 auto;}
.table_login th{font-family:"微软雅黑";font-size:20px;font-weight:normal;text-align:center;}
.table_login input[type="text"]{width:180px;border:1px solid #ccc;height:25px;padding-left:4px;}
.table_login input[type="password"]{width:180px;border:1px solid #ccc;height:25px;padding-left:4px;}
.table_login #checkbox{padding-bottom:20px;text-align:left;}
.table_login th,td{padding-bottom:20px;text-align:center;vertical-align:middle;}
.table_login #tip{font-family:"宋体";font-size:15px;text-align:left;color:red;}
.table_login_button{margin:0 auto;padding-top:20px}
.table_login_button .button{
    background-color:#fff;border:2px solid #0099ff;
    color:#0099ff;width:100px;height:30px;margin:0 20px;
    cursor:pointer;border-radius: 8px;}
.table_login_button .button:hover{
    background-color:#0099ff;border:1px solid #0099ff;
    color:#fff;width:100px;height:30px;margin:0 20px;
    cursor:pointer;border-radius: 8px;}

</style>
</head>
<body>
<div class="title"><h1>学&nbsp;&nbsp;&nbsp;&nbsp;生&nbsp;&nbsp;&nbsp;&nbsp;管&nbsp;&nbsp;&nbsp;&nbsp;理&nbsp;&nbsp;&nbsp;&nbsp;系&nbsp;&nbsp;&nbsp;&nbsp;统</h1></div>
<div class = "welcome">
    <h1>欢迎使用学生管理系统</h1>
    <form action="./index_data.php" method="post">
    <table class="table_login">
        <tr><th>账号：</th><td><input type="text" name = "u_name" id="u_name"/></td></tr>
        <tr><th>密码：</th><td><input type="password" name = "u_passwd"/></td></tr>
        <tr><td colspan="2" id="checkbox"><input type="checkbox" name = "auto_login" checked=1/>下次自动登录</td></tr>
        <tr><td id="tip" colspan="2">提示：初始密码与账号相同，root用户可<br>查看和修改所有学生信息</td></tr>
        
    </table>
    <table class="table_login_button" >
        <tr><td colspan="2" align=center>
        <input class="button" type="submit" value="登录" name = "btn_sub" />
        <input class="button" type="button" value="忘记密码" name = "btn_res" onclick="forget()"/>
        </td></tr>
    </table>
    </form>
</div>
</body>
</html>