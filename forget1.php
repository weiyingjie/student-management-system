<!-- 有密保手机，正确后进入下一页，下一页可重置密码 （验证码）-->
<html>
<head>
<meta charset="utf-8">
<title>找回密码</title>
<script>
    var url=location.search;
    var Request = new Object();
    if(url.indexOf("?")!=-1)
    {
    　　var str = url.substr(1)　//去掉?号
    　　strs = str.split("&");
    　　for(var i=0;i<strs.length;i++)
    　　{
    　　　 Request[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);
    　　}
    }
    var res=Request["u_name"];
    window.setTimeout(function(){document.getElementById("uname").value=res},100);//要加延时才能显示出来
</script>
<style>
body{background-color:#f2eada;margin:0;padding:0;background-image : url(./images/bg_root.jpg);background-repeat : no-repeat;background-size:100% 100%}
.forget{width:400px;margin:70px auto;padding:30px;border:1px solid #ccc;background-color:#eee;
    -moz-border-radius: 40px;-webkit-border-radius: 40px;border-radius: 40px;
   filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;}
.forget h1{font-family:"黑体";font-size:35px;text-align:center;padding-bottom:10px;}
.table_forget{margin:0 auto;}
.table_forget th{font-family:"微软雅黑";font-size:18px;font-weight:normal;text-align:left;}
.table_forget input[type="text"]{width:180px;border:1px solid #ccc;height:25px;}
.table_forget tr,td{text-align:left;vertical-align:middle;}
.table_forget #tip{font-family:"宋体";font-size:15px;text-align:left;color:red;}
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
    <h1>找回密码</h1>
    <form action="./forget1_data.php" method="post">
    <table class="table_forget" >
        <tr><th>用户名：</th></tr>
        <tr><td><input type="text" id = "uname" name = "u_name" /></td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><th>预留手机号码：</th></tr>
        <tr><td><input type="text" name = "u_num"/></td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td id="tip">提示：初始手机号与账号相同</td></tr>
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