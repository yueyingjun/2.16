<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>表格</title>
</head>
<style>
	table{
		width:600px;
		margin:0 auto;
		border:1px solid red;
		border-collapse: collapse;
	}
	td,th{
	height:30px;
	border:1px solid red;
	text-align: center;
	}
	.add{
		display: block;
		width:598px;height:30px;
		border:1px solid red;
		border-top: 0;
		margin:0 auto;
		text-align: center;
		line-height: 30px;
		text-decoration: none;
	}
</style>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>地址</th>
			<th>操作</th>
		</tr>
		<?php
			include "bd.php";
			while($row=$result->fetch_assoc()){
		?>	
			<tr>
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["sex"]?></td>
				<td><?php echo $row["age"]?></td>
				<td><?php echo $row["home"]?></td>
				<td><a href="del.php?id=<?php echo $row['id']?>">删除</a>
					<a href=".php?id=<?php echo $row['id']?>">编辑</a>
				</td>
			</tr>
		<?php
		}
		?>
	</table>
	<a href="" class="add">+</a>
</body>
</html>