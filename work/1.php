<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
	</head>
	<style>
		table{
			width:600px;
			height: auto;
			margin: 0 auto;
			border: 1px solid #000;
			text-align: center;
		}
		tr{
			height: 30px;
			border: 1px solid #000;
			line-height: 30px;
		}
		th,td{
			border: 1px solid #000;
		}
		.add{
			display: block;
			width: 596px;
			height: 30px;
			border: 2px solid #000;
			border-top:none;
			text-decoration: none;
			line-height: 30px;
			text-align: center;
			margin: 0 auto;
			font-size: 30px;
			font-weight: bold;
		}
	</style>
	<body>
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>序号</th>
				<th>名字</th>
				<th>年龄</th>
				<th>性别</th>
				<th>其他</th>
			</tr>
			<?php
				include "public.php";
				$result=$db->query("select * from wangchao");
				while($row=$result->fetch_assoc()){
			?>
				<tr>
					<td><?php echo $row["id"]?></td>
					<td><?php echo $row["name"]?></td>
					<td><?php echo $row["age"]?></td>
					<td><?php echo $row["sex"]?></td>
					<td>
						<a href="<?php echo 'del.php?id='.$row['id']?>">删除</a>
						<a href="">编辑</a>
					</td>
				</tr>
			<?php
			}
			?>
		</table>
		<a href="" class="add">+</a>
	</body>
</html>
