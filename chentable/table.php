<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>学生信息表</title>
	</head>
	<style>
		*{
			list-style: none;
			margin: 0;
			padding: 0;
		}
		h4{
			/*display: block;*/
			margin-top: 30px;
			text-align: center;
		}
		table{
			margin: 20px auto;
			width: 600px;
			border: 1px solid #000;
			border-collapse: collapse;
		}
		tr{
			height: 30px;	
		}
		th,td{
			border: 1px solid #000;
			text-align: center;
		}
		.add{
			display: block;
			width: 100px;
			margin: 10px auto;
			height: 30px;
			border: 1px solid #000;
			text-decoration: none;
			text-align: center;
			line-height: 30px;
			font-size: 20px;
		}
	</style>
	<body>
		<h4>学生信息表</h4>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<th>学号</th>	
				<th>姓名</th>	
				<th>年龄</th>	
				<th>性别</th>	
				<th>操作</th>
			</tr>
			<?php
				include "1.php";	
				$result=$db->query("select * from student");
				while($row=$result->fetch_assoc()){
			?>		
				<tr>
					<td><?php echo $row["num"]?></td>
					<td><?php echo $row["name"]?></td>
					<td><?php echo $row["age"]?></td>
					<td><?php echo $row["sex"]?></td>
					<td>
						<a href="del.php?id=<?php echo $row['id']?>">删除</a> 
						<a href="?>">编辑</a>
					</td>
				</tr>
			<?php
				}
			?>
		</table>
		<a href="add.php?id=<?php echo $row['id']?>" class="add">增加</a>
	</body>
</html>
