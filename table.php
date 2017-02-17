<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<style>
	table{
		width:800px;
		height: auto;
		border-collapse:collapse;
		border:1px solid blue;
		margin:0 auto;
	}
	tr{
		height:30px;
	}
	th,td{
		width:20%;
		height: 30px;
		text-align: center;
		line-height:30px; 
		border:1px dotted blue;
	}
	.add{
		display: block;
		width:798px;
        height:30px;
        font-size:20px;
        text-align: center;
        line-height: 30px;
        border:1px solid blue;
        margin:0 auto;
        text-decoration: none;
	}
	a{
		text-decoration: none;
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
	        $sql="select * from stu";
	        $result=$db->query($sql);
	        while($row=$result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["sex"]?></td>
			<td><?php echo $row["age"]?></td>
			<td>
				<a href="del.php?id=<?php echo $row['id']?>">删除</a>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
	<a href="add.php" class="add">+</a>
</body>
</html>