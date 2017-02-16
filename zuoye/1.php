<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style>
	table{
		width:800px;
		border:1px solid #000;
		background:red;
		margin:0 auto;
		border-collapse: collapse;
	}
	th,td{
		border:1px solid #000;
		line-height:70px;
		
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
			include "public.php";
			$result=$db->query("select * from stu");
			while($row=$result->fetch_assoc()){
		?>	
				<tr>
					<td><?php echo $row["name"]?></td>
					<td><?php echo $row["age"]?></td>
					<td><?php echo $row["sex"]?></td>
					<td>
						<a href="del.php?id=<?php echo $row['id']?>">删除</a> <a href="edit.php?id=<?php echo $row['id']?>"></a>编辑</td>

				</tr>
		<?php
			}
			?>
	</table>
</body>
</html>
