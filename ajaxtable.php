<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style>
	*{
		padding: 0;
		margin: 0;
		list-style: none;
	}
	table{
		width: 600px;
		border: 1px solid #000;
		border-collapse: collapse;
		margin: 0 auto;
		margin-top: 50px;
	}
	th{
		background: paleturquoise;
	}
	th,td{
		border: 1px solid #000;
		text-align: center;
		height: 30px;
		line-height: 30px;
	}
	.add{
		width: 598px;
		display: block;
		height: 30px;
		line-height: 30px;
		text-align: center;
		margin: 0 auto;
		border: 1px solid #000;
		border-top: none;
		text-decoration: none;
		font-size: 20px;
	}
</style>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>操作</th>
		</tr>
		<?php
			include "db.php";
			$sql="select * from students";
			$result=$db->query($sql);
			while($row=$result->fetch_assoc()){
		?>		
			<tr>
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["age"]?></td>
				<td><?php echo $row["sex"]?></td>
				<td><a href="del.php?id=<?php echo $row["id"]?>">删除</a><a href="javascript:;" style="margin-left: 10px;">编辑</a></td>	
			</tr>
		<?php	
			}
		?>
	</table>
	<a href="" class="add">+</a>
</body>
</html>
<?php

?>