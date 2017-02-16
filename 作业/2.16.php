<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style>
	table{
			width: 700px;
			height: auto;
			margin:0 auto;
			}
		tr{
			height:30px;
			border:1px solid #000;
			line-height: 30px;
			}
		th,td{
			border:1px solid #000;
			text-align: center;
			}
		.add{
			display:block;
			width: 698px;
			height: 30px;
			border: 1px solid #000;
			border-top:none;
			text-decoration: none;
			line-height: 30px;
			text-align: center;
			margin: 0 auto;
			}
			a{
				display: block;
				text-align: center;
				margin-left:auto;
			}
</style>
<body>
		<table border="" cellspacing="0" cellpadding="0">
			<tr>
				<th>学号</th>
				<th>名字</th>
				<th>性别</th>
				<th>年龄</th>
				<th>住址</th>
				<th>操作</th>
			</tr>
				<?php
					include "commit.php";
					$result=$db->query("select * from stu");
						while($row=$result->fetch_assoc()){
				?>		
					<tr>
						<td><?php echo $row["id"]?></td>
						<td><?php echo $row["name"]?></td>
						<td><?php echo $row["sex"]?></td>
						<td><?php echo $row["age"]?></td>
						<td><?php echo $row["home"]?></td>
						<td>
							<a href="del.php?id=<?php echo $row['id']?>">删除</a>
							<a href="">修改</a>
						</td>
					</tr>
				<?php
					}
				?>
		</table>	
		<a href="" class="add">+</a>
</body>
</html>