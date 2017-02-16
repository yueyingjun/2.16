<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Document</title>
		<style>
			table{
				width:500px;
				margin: 0 auto;
				border-collapse: collapse;
				
			}
			th,td{
				border: 1px solid #000;
			}
			a{
				text-decoration: none;
				font-size: 14px;
			}
			.add{
				display: block;
				width:498px;
				height: 30px;
				text-align: center;
				line-height: 30px;
				color: red;
				font-size: 20px;
				font-weight: 500;
				border: 1px solid #000;
				border-top: none;
				margin: 0 auto;
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
				include "1.php";
				$sql="select * from stu";
				$result=$db->query($sql);
//				var_dump($result);
		
//				echo "<pre>"; 
				while($row=$result->fetch_assoc()){
			?>
					<tr>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['age'] ?></td>
						<td><?php echo $row['sex'] ?></td>
						<td><a href="del.php?id=<?php echo $row['id']?>">删除</a> <a href="edit.php?id=<?php echo $row['id']?>">编辑</a></td>
					</tr>
			<?php 
				}
			?>	
			
		</table>
		<a href="add.php?id=<?php echo $row['id']?>" class="add">+</a>
	</body>
	</html>
