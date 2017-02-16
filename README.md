<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生管理系统</title>
<style>
*{
	margin: 0;
	padding: 0;
}
table{
	width: 500px;
	border: 1px solid #000;
	margin:  0 auto;
	border-collapse:collapse;
	height: auto;
}
tr{
	width: 125px;
	text-align: center;
	border: 1px solid #000;
}
td,th{
	width: 125px;
	text-align: center;
	border: 1px solid #000;
}
.add{
	display: block;
	width: 498px;
	height: 30px;
	line-height: 30px;
	text-align: center;
	margin:  0 auto;
	border: 1px solid #000;
	border-top: none;
}
a{
	text-decoration: none;
	color: red;
}
</style>
</head>

<body>
	<table>
		<tr>
			<th>学号</th>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th></th>
		

		</tr>
		
		<?php

		 $db=new mysqli("localhost","root","","info");
         $db->query("set names utf8"); 
         $sql="select * from student";
		 $result=$db->query($sql); 
		 while($row=$result->fetch_assoc()){?>
            <tr>
	             <td><?php echo $row["id"] ?></td>
	             <td><?php echo $row["name"] ?></td>
	             <td><?php echo $row["sex"] ?></td>
	             <td><?php echo $row["age"] ?></td>
	             <td><a href="del.php?id=<?php echo $row['id'] ?>">删除</a><a href="edit.php?id=<?php echo $row['id']?>">编辑</a></td>


            </tr>
		 
		 <?php } ?>
		
         
		
	</table>
	<a href="add.php" class="add">添加</a>
</body>
</html>
