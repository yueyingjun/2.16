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
	}
	th,td{
		border: 1px solid #000;
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
			include "2.php";
			$sql="select * from sss";
			$result=$db->query($sql);
			while($row=$result->fetch_assoc()){
		?>		
			<tr id="<?php echo $row["id"]?>">
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["age"]?></td>
				<td><?php echo $row["sex"]?></td>
				<td><a href="3.php?id=<?php echo $row["id"]?>">删除</a></td>	
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