<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
	<style>
		table{
			width:500px;
			margin: 0 auto;
			border-collapse: collapse;
			border 1px dashed red;			
		}
		th,td{
			color:yellowgreen;
			border:1px solid #000;
			text-align: center;
			width: 20%;
		}
		a{
			text-decoration: none;
			color:orangered;
		}
		.add{
			display: block;
			width: 500px;
			height: 30px;
			background: #aaa;
			color:red;
			font-size: 30px;
			margin: 0 auto;
			text-align: center;
			line-height: 30px;
			border: 1px solid #000;
			border-top:none;
		}
	</style>
	<body>
		<table>
			<tr>
				<th>姓名</th>
				<th>年龄</th>
				<th>性别</th>
				<th>地址</th>
				<th>操作</th>
			</tr>
			<?php
				include "hq.php";//外部引入用Include
				$result=$db->query("select * from stu");//->相当于. 调用方法
				while($row=$result->fetch_assoc()){							
			?>
			<tr>
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["age"]?></td>
				<td><?php echo $row["sex"]?></td>
				<td><?php echo $row["city"]?></td>
				<td>
					<a href="del.php?id=<?php echo $row['id']?>">删除</a> <!--传输的数据和ajax一样 地址?数据-->
					<a href="upda.php?id=<?php echo $row['id']?>">编辑</a>
				</td>
			</tr>
			<?php
				}	
			?>
		</table>
		<a href="add.php" class="add">+</a>
	</body>
</head>
</html>