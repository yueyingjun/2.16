<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>表格</title>
</head>
<style>
	table{
		margin: 100px auto;
	}
	th,td{
		text-align: center;
		width: 200px;
		height: 40px;
		font-size: 20px;
		line-height: 40px;
		color: #666;
		border: 1px solid red;
	}
	th{
		cursor: pointer;
	}
	.add{
		transition:all .3s;
	}
	.add:hover{
		color: green;
		font-size: 35px;
	}
	a{
		padding: 10px;
		color: red;
		transition:all .3s;
		text-decoration: none;
	}
	a:hover{
		color: yellowgreen;
	}
</style>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th class="add"><a href="add.php">+</a></th>
		</tr>
		<?php
			header("Content-Type:text/html;charset=utf-8");
			$mysql=new mysqli("localhost","root","","class");
			$mysql->query("set names utf8");
			$result=$mysql->query("select * from stu");
			while($row=$result->fetch_assoc()){
			?>
			<tr>
				<td><?php echo $row["name"];?></td>
				<td><?php echo $row["age"];?></td>
				<td><?php echo $row["sex"];?></td>
				<td><a href="del.php?id=<?php echo $row["id"]?>">删除</a><a href="upd.php">修改</a></td>
			</tr>
		<?php }?>
	</table>
</body>
</html>