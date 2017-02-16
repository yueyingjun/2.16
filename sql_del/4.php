<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>删除</title>
</head>
<style>
	table{width:800px;margin:0 auto;border:1px solid #000;}
	td,th{border:1px solid #000;border-top:none;text-align:center;}
	tr{height:30px;line-height:30px;}
	.add{display:block;text-align:center;font-size:18px;text-decoration: none;width:798px;height:30px;border:1px solid #000;margin:0 auto;border-top:none;}
	a{text-decoration: none;}
</style>
<body>
	<table cellspacing="0" cellpadding="0">
		<tr>
			<th>id</th><th>姓名</th><th>性别</th><th>年龄</th><th>地址</th><th>操作</th>
		</tr>
		<?php
			include "common.php";
			$db->query("set names utf8");
			$result=$db->query("select * from person");
			while($row=$result->fetch_assoc()){
		?>	
			<tr>
				<td><?php echo $row["id"]?></td>
				<td><?php echo $row["name"]?></td>
				<td><?php echo $row["sex"]?></td>
				<td><?php echo $row["age"]?></td>
				<td><?php echo $row["home"]?></td>
				<td>
					<a href="<?php echo 'del.php?id='.$row['id']?>">删除</a>
					<a href="">添加</a>
				</td>
			</tr>
		<?php	
		}
		?>
	</table>
	<a href="" class="add">+</a>
</body>
</html>