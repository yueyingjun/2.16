<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>增删改查</title>
<style>
	table{
		width:1000px;
		height: auto;
		border: 1px solid lightskyblue;
		margin:0 auto;
		border-collapse: collapse;
	}
	tr,th{
		width:200px;
		height: 50px;
		border: 1px solid lightskyblue;
	}
	td{
		text-align: center;
		border: 1px solid lightskyblue;
	}
	td>a{
		text-decoration: none;
	}
	td>a:hover{
		text-decoration: underline;
	}
</style>
</head>
<body>
	<table>
		<tr>
			<th>学号</th>
			<th>班级</th>
			<th>姓名</th>
			<th>数学</th>
			<th>英语</th>
			<th class="add">+</th>
		</tr>
		<?php
			include "db.php";
			$sql="select * from grades";
			$result=$db->query($sql);//发送的数据放到结果集当中
			while($row=$result->fetch_assoc()){  //不知道循环次数用while循环
		?>
					<tr>
						<td><?php echo $row["学号"]?></td>
						<td><?php echo $row["班级"]?></td>
						<td><?php echo $row["姓名"]?></td>
						<td><?php echo $row["数学"]?></td>
						<td><?php echo $row["英语"]?></td>
						<td><a href="delete.php?id=<?php echo $row["学号"]?>">删除</a>
							&nbsp;&nbsp;&nbsp;<a href="modify.php?">修改</a></td>
					</tr>
		<?php }?>
		
	</table>
</body>
</html>