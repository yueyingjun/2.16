<html>
	<head>
		<title>123</title>
	</head>
	<style type="text/css">
		table{
			width:400px;
			margin:0 auto;
			text-align: center;
		}
		th,td{
			border: 1px solid #000000;	
		}
		table a{
			margin-left: 10px;
		}
		.add{
			display: block;
			width: 400px;
			text-align: center;
			height: 30px;
			font-size: 20px;
			line-height: 30px;
			margin: 0 auto;
			border: 1px solid #000000;
			text-decoration: none;
		}
	</style>
	<body>
		<table>
			<tr>
				<th>姓名</th>
				<th>班级</th>
				<th>年龄</th>
				<th>性别</th>
			</tr>
			<?php
				$_info=new mysqli('localhost','root','','qq');
				$_info->query("set names utf8");
				$result=$_info->query("select * from newqq");
				while($row=$result->fetch_assoc()){
					echo '<tr><td>'.$row["name"].'</td><td>'.$row["class"].'</td><td>'.$row["age"].'</td><td>'.$row["sex"].'</td>'.'<td><a href="">编辑</a><a href="delete.php?id='.$row["id"].'">删除</a></td><tr>';		
				}
			?>
		</table>
		<a href="add.php" class="add">添加</a>
	</body>
</html>