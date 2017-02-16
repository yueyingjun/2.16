<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>数据库表格增删改查</title>
	<style>
		table{
			width: 600px;
			margin:0 auto;
			border:1px solid #ccc;
		}
		tr,td{
			height: 30px;
			line-height: 30px;
			text-align: center;
			border-collapse: collapse;
			border:1px solid #ccc;
		}
		.add{
			display: block;
			width: 600px;
			border:1px solid #ccc;
			text-align: center;
			height: 30px;
			line-height: 30px;
			font-size: 20px;
			margin:0 auto;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>操作</th>
		</tr>
			<?php 
			include "public.php";
			$result=$mysql->query("select * from ccc");
			while($row=$result->fetch_assoc()){
			?>
				<tr id="<?php echo $row['id'] ?>">
					<td><?php echo $row["name"] ?></td>
					<td><?php echo $row["age"] ?></td>
					<td><?php echo $row["sex"] ?></td>
					<td><a href="del.php?id=<?php echo $row['id']?>">删除</a></td>
				</tr>
			<?php
			}
			?>
		
	</table>
	<a href="add.php" class="add">+</a>
</body>
</html>