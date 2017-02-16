<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<style>
		table{
			width: 600px;
			margin: 0 auto;
			border: 1px solid #000;
			border-collapse: collapse;
		}
		th,td{
			border: 1px solid #000;
		}
		.add{
			width: 598px;
			height: 30px;
			font-size: 20px;
			text-align: center;
            line-height: 30px;
            border:1px solid #000;
            border-top:none;
            margin:0 auto;
            cursor: pointer;
            display: block;
            text-decoration: none;
            color:#000;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>学号</th>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>操作</th>
		</tr>
		<?php
		include "mysql.php";
		$sql="select * from student";
		$result=$mysql->query($sql);
		while($row=$result->fetch_assoc()){
		?>
			<tr id="<?php echo $row['id']?>">
				<td><?php echo $row["num"]?></td>
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["age"]?></td>
				<td><?php echo $row["sex"]?></td>
				<td><a href="del.php?id=<?php echo $row['id']?>">删除</a><a href="add.php?id=<?php echo $row['id']?>">编辑</a></td>
			</tr>
			
		<?php
		}	
		?>
	</table>
	<a href="" class="add">+</a>
</body>
</html>