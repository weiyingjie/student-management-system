<!-- 修改手机号，改密码，看自己的信息 添加一个退出功能 -->
<?php 
if(!defined('APP')) die('error!');
$stu_info=$stu_info[0];//学生信息为$stu_info
?>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $stu_info['stu_name'];?>学生信息</title>
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#e").click(function(){
    $("#f").slideToggle();
  }); 
});
$(document).ready(function(){
  $("#g").click(function(){
    $("#h").slideToggle();
  }); 
});
$(function() {
        $(".menu").on("click", "li", function() {
            var sId = $(this).data("id"); //获取data-id的值
            window.location.hash = sId; //设置锚点
            loadInner();
        });
        $(".menu > ul > li > ul").on("click", "li", function() {
            var sId = $(this).data("id"); //获取data-id的值
            window.location.hash = sId; //设置锚点
            loadInner();
        });
 
        function loadInner() {
            var sId = window.location.hash;
            var pathn;
            switch(sId) {
                case "#xuanke":
                    pathn = "<?php echo './xuanke.php?stu_id='.$_GET['u_name'].'&identify='.$_GET['identify'];?>";
                    break;
                case "#tuike":
                    pathn = "<?php echo './tuike.php?stu_id='.$_GET['u_name'].'&identify='.$_GET['identify'];?>";
                    break;
                case "#classmate":
                    pathn = "<?php echo './classmate.php?stu_id='.$_GET['u_name'];?>";
                    break;
                case "#chakan":
                    pathn = "<?php echo './chakan.php?stu_id='.$_GET['u_name'].'&identify='.$_GET['identify'];?>";
                    break;
                case "#update":
                    pathn = "<?php echo './update.php?stu_id='.$_GET['u_name'].'&identify='.$_GET['identify'];?>";
                    break;
                case "#xiugai":
                    pathn = "<?php echo './forget2.php?u_name='.$_GET['u_name'].'&identify='.$_GET['identify'];?>";
                    break;
            }
            $(".show").load(pathn); //加载相对应的内容
        }
        var sId = window.location.hash;
        loadInner();
    });
</script>
<style >
body{background-color:#f2eada;margin:0;padding:0;background-image : url(./images/bg.jpg);background-repeat : no-repeat;background-size:100% 100%}
.menu{position:fixed;background-color:#CEE3F6;border:1px solid #0099ff;width:13%;height:100%;float:left;
    filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;}
.menu ul,li{list-style-type:none;border-top:1px solid #0099ff;border-bottom:1px solid #0099ff;margin:0;padding:0;}
.menu > ul{margin:40% 0;}
.menu a{text-decoration: none;color: #0099ff;}
.menu > ul > li > ul{display: none;}
.menu > ul > li > ul > li {border:1px solid #fff;background-color: #fff; color:#0099ff;text-align:center;}
.menu > ul > li > ul > li:hover > a{width: 100%;line-height: 20px;margin:0 auto;padding:0;color: white;
    background-color: #0099ff;border:1px solid #fff;display:block;}
.menu > ul > li > a{width: 100%;line-height: 40px;background-color: white;
    text-align: center;display: block;}
.menu > ul > li:hover > a{width: 100%;line-height: 40px;color: white;background-color: #0099ff;
    border:1px solid #fff;text-align: center;display: block;}
.menu .H{width:100%;line-height:50px;color:white;font-family: "微软雅黑";background-color:#0099ff;
    font-size: 15px;text-align: center;}
.show{position:fixed;left:13%;width:87%;border:1px solid #0099ff;height:100%;}
.exit{width:100%;line-height:50px;text-align: center;}
.button{background-color:#fff;border:2px solid red;
   color:red;width:100px;height:30px;
   cursor:pointer;border-radius: 8px;}
.button:hover{
   background-color:red;border:1px solid red;
   color:#fff;width:100px;height:30px;
   cursor:pointer;border-radius: 8px;}
</style>
</head>
<body>
<div class="menu">
    <div class="H"><h2>菜&nbsp;&nbsp;&nbsp;&nbsp;单</h2></div>
    <div class="exit">
        <form action="" method="get">
            <input type="hidden" name="exit" value="exit">
            <input class="button" type="submit" value="退出">
        </form>
    </div>
    <ul>
        <li>
            <a  id="e">个人信息</a>
            <ul id="f">
                <li data-id="chakan"><a>查看个人信息</a></li>
                <li data-id="update"><a>修改个人信息</a></li>
                <li data-id="xiugai"><a>修改密码</a></li>
            </ul>
        </li>       
        <li>
            <a id="g">学生选课</a>
            <ul id="h">
                <li data-id="xuanke"><a>选课</a></li>
                <li data-id="tuike"><a>退课</a></li>
            </ul>
        </li>
        <li data-id="classmate"><a>查看班级同学</a></li>
    </ul>
    
</div>
<div class="show"></div>
</body>
</html>