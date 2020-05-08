<?php 
require './functions.php';
$link=dbInit();
$sql='select * from student where stu_id='.$_GET['stu_id'];
$stu_info = fetchAll($link,$sql);
$stu_info=$stu_info[0];
$sql='select * from student where stu_grade='.$stu_info['stu_grade'].' and stu_class="'.$stu_info['stu_class'].'";';
$stu_info = fetchAll($link,$sql);
?> 
<html>
<head>
<meta charset="utf-8">
<style>
body{background-color:#f2eada;margin:0;padding:0;background-image : url(./images/bg_root.jpg);background-repeat : no-repeat;background-size:100% 100%}
.showlist {width:80%;margin:50px auto;padding:20px;border:1px solid #0099ff;background-color:#eee;
   -moz-border-radius: 40px;-webkit-border-radius: 40px;border-radius: 40px;
   filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;}
.showlist h1{font-family:"黑体";font-size:35px;text-align:center;padding-bottom:10px;}
.inline {display: inline-block;height:22px;margin:0 119px;}
.search td{text-align:center;vertical-align:middle;}
.search input[type="text"]{width:180px;border:1px solid #0099ff;height:28px;}
.tablebox .list {margin:20px auto;border:2px solid #B5D6E6;width:80%;border-collapse:collapse;}
.tablebox .list th{font-family:"宋体";font-size:23px;text-align:center;}
.tablebox .list td{font-family:"宋体";font-size:20px;text-align:center;}
</style>
</head>
<body>
   <div class="showlist">
   <h1>同学基本信息</h1>
   <div class="tablebox">
      <table class="list" border=1>
         <tr>
            <th>年级</th>
            <th>学号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>学院</th>
            <th>班级</th>
         </tr>
         <?php 
         if(!empty($stu_info)):
            foreach($stu_info as $row): 
         ?>
            <tr>
                <td><?php echo $row['stu_grade']; ?></td>
                <td><?php echo $row['stu_id']; ?></td>
                <td><?php echo $row['stu_name']; ?></td>
                <td><?php echo $row['stu_sex']; ?></td>
                <td><?php echo $row['stu_college']; ?></td>
                <td><?php echo $row['stu_class']; ?></td>
			</tr>
         <?php endforeach; ?>
         <?php else: ?>
			<tr><td colspan="6">暂无信息</td></tr>
         <?php endif; ?>
      </table>
   </div>
   </div> 
</body>
</html>