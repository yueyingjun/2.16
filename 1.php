<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style>
	*{
		margin: 0;
		padding: 0;
		list-style: none;
	}
	table{
		width: 800px;
		border: 1px solid red;
		margin: 20px auto;
		margin-bottom: 0;
		border-collapse: collapse;
		text-align: center;
	}
	tr,th,td{
		border: 1px solid red;
		height: 40px;
	}
	.add{
		width: 798px;
		border: 1px solid red;
		text-align: center;
		display: block;
		border-top:none;
		margin: 0 auto;
		text-decoration: none;
		line-height: 40px;
		font-size: 30px;
	}
	a{
		color: #333;
		text-decoration: none;
		
	}
	a:hover{
		color:skyblue;
	}
</style>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>住址</th>
			<th>操作</th>
		</tr>
<?php
	include "public.php";
	$add="select * from stu";
	$result=$zy->query($add);
	echo "<pre>";
	while($row=$result->fetch_assoc()){?>
		<tr>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["sex"]?></td>
			<td><?php echo $row["home"]?></td>
			<td><a href="del.php?id=<?php echo $row["id"]?>">删除</a><a href="javascript:;">编辑</a></td>
		</tr>
<?php }?>

	</table>
	<a href="add.php" class="add">+</a>
</body>
</html>



