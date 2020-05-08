<?php 
require './functions.php';
$link=dbInit();
$sql='select * from course';
$course = fetchAll($link,$sql);
?>
<html>
<head>
<meta charset="utf-8">
<title>查看课程</title>
<script>
function create() {
      window.location.href='./addcourse.php';
   }
function back() {
      window.location.href='./showlist_data.php?u_name=root&identify=root';
   }
</script>
<style>
body{background-color:#f2eada;margin:0;padding:0;background-image : url(./images/bg_root.jpg);background-repeat : no-repeat;background-size:100% 100%}
.showlist {width:80%;margin:50px auto;padding:20px;border:1px solid #0099ff;background-color:#eee;
   -moz-border-radius: 40px;-webkit-border-radius: 40px;border-radius: 40px;
   filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;}
.showlist h1{font-family:"黑体";font-size:35px;text-align:center;padding-bottom:10px;}
.inline {display: inline-block;height:40px;margin:0 auto;width:100%;text-align:center;}
.tablebox .list {margin:20px auto;border:2px solid #B5D6E6;width:80%;border-collapse:collapse;}
.tablebox .list a{text-decoration: none;color: #0099ff;}
.tablebox .list th{font-family:"宋体";font-size:23px;text-align:center;}
.tablebox .list td{font-family:"宋体";font-size:20px;text-align:center;}
.button{margin:0 auto;}
.button{
   background-color:#fff;border:2px solid #0099ff;
   color:#0099ff;width:100px;height:30px;
   cursor:pointer;border-radius: 8px;}
.button:hover{
   background-color:#0099ff;border:1px solid #0099ff;
   color:#fff;width:100px;height:30px;
   cursor:pointer;border-radius: 8px;}
</style>
</head>
<body>
   <div class="showlist">
   <h1>课程列表</h1>
    <div class="inline">
        <input class="button" type="button" value="添加课程信息" onclick="create()">
        <input class="button" type="button" value="返回" onclick="back()">
    </div>
   <div class="tablebox">
      <table class="list" border=1>
         <tr>
            <th>课程号</th>
            <th>课程名</th>
            <th>操作</th>
         </tr>
         <?php 
         if(!empty($course)):
            foreach($course as $row): 
         ?>
         <tr>
				 <td><?php echo $row['course_id']; ?></td>
				 <td><?php echo $row['course_name']; ?></td>
				 <td>
                    <span>
                        <img src="images/edt.gif" width="16" height="16" /><a href="<?php echo './course_data.php?course_id='.$row['course_id']; ?>">删除</a>
                    </span>
				</td>
			</tr>
         <?php endforeach; ?>
         <?php else: ?>
			<tr><td colspan="3">暂无课程</td></tr>
         <?php endif; ?>
      </table>
   </div>
   </div> 
</body>
</html>
