<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<style type="text/css">
		table{
			width: 600px;
			border: 1px solid #000;
			border-collapse: collapse;
			margin: 0 auto;
			margin-top: 60px;
			text-align: center;
		}
		th,td{
			border: 1px solid #000;
		}
		.add{
			display: block;
			width: 598px;
			height: 30px;
			text-align: center;
			border: 1px solid #000;
			border-top: none;
			line-height: 30px;
			text-decoration: none;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<td>姓名</td>
			<td>性别</td>
			<td>年龄</td>
			<td>操作</td>
		</tr>
		<?php
			include "db.php";
   			$result=$db->query("select * from stu");
   			while($row=$result->fetch_assoc()){
		?>	
			<tr id="">
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["sex"]?></td>
				<td><?php echo $row["age"]?></td>
				<td><a href="no2-del.php?id=<?php echo $row['id']?>">删除</a></td>
			</tr>
		<?php
			}
		?>
	</table>
	<a href="" class="add">添加</a>
</body>
</html>