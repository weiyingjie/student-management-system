<?php 
require './functions.php';
$link=dbInit();
$sql='select * from `'.$_GET['stu_id'].'`;';
$res=fetchAll($link,$sql);
if(empty($res)){
    $sql='select * from course';
    $course = fetchAll($link,$sql);
}else{
    $sql='select * from course where course_id not in (select course_id from `'.$_GET['stu_id'].'`);';
    $course = fetchAll($link,$sql);
}

?>
<html>
<head>
<meta charset="utf-8">
<title>选课</title>
<style>
body{background-color:#f2eada;margin:0;padding:0;background-image : url(./images/bg_root.jpg);background-repeat : no-repeat;background-size:100% 100%}
.showlist {width:80%;margin:50px auto;padding:20px;border:1px solid #0099ff;background-color:#eee;
   -moz-border-radius: 40px;-webkit-border-radius: 40px;border-radius: 40px;
   filter:alpha(Opacity=80);-moz-opacity:0.8;opacity: 0.8;}
.showlist h1{font-family:"黑体";font-size:35px;text-align:center;padding-bottom:10px;}
.search td{text-align:center;vertical-align:middle;}
.search input[type="text"]{width:180px;border:1px solid #0099ff;height:28px;}
.tablebox .list {margin:20px auto;border:2px solid #B5D6E6;width:80%;border-collapse:collapse;}
.tablebox .list a{text-decoration: none;color: #0099ff;}
.tablebox .list th{font-family:"宋体";font-size:23px;text-align:center;}
.tablebox .list td{font-family:"宋体";font-size:20px;text-align:center;}
</style>
</head>
<body>
   <div class="showlist">
   <h1>课程列表</h1>
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
                        <img src="images/edt.gif" width="16" height="16" /><a href="<?php echo './xuanke_data.php?stu_id='.$_GET['stu_id'].'&identify='.$_GET['identify'].'&course_id='.$row['course_id']; ?>">选课</a>
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
