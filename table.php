<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style type="text/css">
	table{
		width: 500px;
		border: 1px solid #000;
		margin: 0 auto;
		border-collapse: collapse;
	}
	tr{
		border: 1px solid #000;
	}
	th,td{
		text-align: center;
		border: 1px solid #000;
	}
	a{
		margin: 0 10px;
		color: red;
		text-decoration: none;
	}
	a:hover{
		text-decoration: underline;
	}
	.add{
		width: 498px;
		font-size: 20px;
		font-weight: bold;
		line-height: 20px;
		text-align: center;
		color: red;
		margin: 0 auto;
		display: block;
		border: 1px solid #000;
		border-top: none;
	}
</style>
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
			include "sql.php";
     		$sql="select * from biao";
      		$result=$db->query($sql);
      		while ($row=$result->fetch_assoc()){
		?>
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['sex'] ?></td>
				<td><?php echo $row['age'] ?></td>
				<td><a href="del.php?id=<?php echo $row['id']?>">删除</a></td>
			<tr>
		<?php		
			}
		?>
	</table>
	<a href="" class="add">+</a>
</body>
</html>
