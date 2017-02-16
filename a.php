<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style>
	table{
		width: 800px;
		margin: 20px auto 0;
		border: 1px solid #000;
		border-collapse: collapse;
	}
	tr,th{
		text-align: center;
		
		border: 1px solid #000;
	}
	.add{
		display: block;
		width: 798px;
		height: 30px;
		margin: 0 auto;
		border: 1px solid #000;
		border-top: 0;
		text-align: center;
		line-height: 30px;
		text-decoration: none;
		
		
	}
</style>
<body>
	<table>
		<tr>
			<th>名字</th>
			<th>年龄</th>
			<th>性别</th>
			<th>操作</th>
		</tr>
		<?php
			include "shuju.php";
			$sql="select * from shuju216";
			$result=$db->query($sql);
			while ($row=$result->fetch_assoc()){
				
		?>
				<tr>
					<td><?php echo $row["name"]?></td>
					<td><?php echo $row["age"]?></td>
					<td><?php echo $row["sex"]?></td>
					<td>
						<a href="dele.php?id=<?php echo $row['id']?>">删除</a><a href="">修改</a>
					</td>
					

				</tr>
		<?php	
			}
			?>

	</table>
	<a href="add.php" class="add">+</a>
</body>
</html>





<?php

?>