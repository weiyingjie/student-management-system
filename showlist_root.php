<!-- 显示学生信息（新建学生表）添加一个退出功能 -->
<?php if(!defined('APP')) die('error!');?>
<html>
<head>
<meta charset="utf-8">
<title>学生信息（管理员）</title>
<script>
   function create() {
      window.location.href='./add.php';
   }
   function course() {
      window.location.href='./course.php';
   }
</script>
<style>
body{background-color:#f2eada;margin:0;padding:0;background-image : url(./images/bg_root.jpg);background-repeat : no-repeat;background-size:100% 100%}
.showlist {width:80%;margin:50px auto;padding:20px;border:1px solid #0099ff;
   background-color:#eee;-moz-border-radius: 40px;-webkit-border-radius: 40px;border-radius: 40px;
   filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;}
.showlist h1{font-family:"黑体";font-size:35px;text-align:center;padding-bottom:10px;}
.bar{width:100%;line-height:25px;}
.inline {display: inline-block;height:40px;margin:0 auto;width:33%;float:left;text-align:center;}
.exit{background-color:#fff;border:2px solid red;
   color:red;width:100px;height:30px;
   cursor:pointer;border-radius: 8px;}
.exit:hover{
   background-color:red;border:1px solid red;
   color:#fff;width:100px;height:30px;
   cursor:pointer;border-radius: 8px;}
.search td{text-align:center;vertical-align:middle;}
.search input[type="text"]{width:180px;border:1px solid #0099ff;height:28px;}
.button{
   background-color:#fff;border:2px solid #0099ff;
   color:#0099ff;width:100px;height:30px;
   cursor:pointer;border-radius: 8px;}
.button:hover{
   background-color:#0099ff;border:1px solid #0099ff;
   color:#fff;width:100px;height:30px;
   cursor:pointer;border-radius: 8px;}
.tablebox .list {margin:20px auto;border:2px solid #B5D6E6;width:80%;border-collapse:collapse;}
.tablebox .list a{text-decoration: none;color: #0099ff;}
.tablebox .list th{font-family:"宋体";font-size:23px;text-align:center;}
.tablebox .list td{font-family:"宋体";font-size:20px;text-align:center;}
</style>
</head>
<body>
   <div class="showlist">
   <h1>学生基本信息</h1>
   <div class="bar">
      <div class="inline">
         <input class="button" type="button" value="添加学生信息" onclick="create()">
         <input class="button" type="button" value="管理课程信息" onclick="course()">
      </div>
      <div class="inline">
         <form action="" method="get">
            <table class="search">
               <input type="hidden" name="u_name" value="<?php echo $_GET['u_name'];?>">
               <input type="hidden" name="identify" value="<?php echo $_GET['identify'];?>">
               <tr><td><input type="text" name="keyword"></td><td><input class="button" type="submit" value="查找"></td></tr>
            </table>
         </form>
      </div>
      <div class="inline">
         <form action="" method="get">
            <input type="hidden" name="exit" value="exit">
            <input class="exit" type="submit" value="退出">
         </form>
      </div>
   </div>
   <div class="tablebox">
      <table class="list" border=1>
         <tr>
            <th>年级</th>
            <th>学号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>学院</th>
            <th>班级</th>
            <th>操作</th>
         </tr>
         <?php 
         if(!empty($stu_info)): 
            
            if(isset($_GET['keyword'])){
               $keyword = $_GET['keyword'];
               $sql='select * from student where stu_name like "%'.$keyword.'%";';
               $stu_info = fetchAll($link,$sql);
            }
            foreach($stu_info as $row): 
         ?>
         <tr>
				 <td><?php echo $row['stu_grade']; ?></td>
				 <td><?php echo $row['stu_id']; ?></td>
				 <td><?php echo $row['stu_name']; ?></td>
				 <td><?php echo $row['stu_sex']; ?></td>
				 <td><?php echo $row['stu_college']; ?></td>
             <td><?php echo $row['stu_class']; ?></td>
				 <td>
					<div align="center">
						<span>
							<img src="images/edt.gif" width="16" height="16" />
                     <a href="<?php echo './update.php?stu_id='.$row['stu_id'].'&identify='.$_GET['identify']; ?>">编辑</a>
                     &nbsp; &nbsp;
							<a href="<?php echo './delete.php?stu_id='.$row['stu_id'] ?>">
                     <img src="images/del.gif" width="16" height="16" />删除</a>
						</span>
					</div>
				</td>
			</tr>
         <?php endforeach; ?>
         <?php else: ?>
			<tr><td colspan="7">暂无信息</td></tr>
         <?php endif; ?>
      </table>
   </div>
   </div> 
</body>
</html>
