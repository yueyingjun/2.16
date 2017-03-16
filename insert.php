<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单</title>
	<style>
		*{
			margin: 0;
			padding:0;
			list-style: none;
		}
		table{
			width: 800px;
			height: auto;
			margin:0 auto;
			border:1px solid #f00;
			border-collapse: collapse;;
		}
	td,th{
		width: auto;
		height: 30px;
		border:1px solid #f00;
		text-align: center;
		line-height: 30px;
		color:#666;
	}
	.add{
		display: block;
		width: 798px;
		height: 30px;
		text-align: center;
		line-height: 30px;
		border: 1px solid #f00;
		margin: 0 auto;
		border-top: none;
		text-decoration: none;
		font-size: 25px;
		color: #f00;
	}
	</style>
</head>
<body>
	<table>
		<tr>
			
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>操作</th>
		</tr>
		<?php
			include "bd.php";
			// $sql="select * from hu";
			$result=$db->query("select * from hu");
			while($row=$result->fetch_assoc()){
		?>
				<tr>
					<td><?php echo $row["name"]?></td>
					<td><?php echo $row["age"]?></td>
					<td><?php echo $row["sex"]?></td>
					<td><a href="del.php?id=<?php echo $row['id']?>">删除</a> <a href="del.php?id=<?php echo $row['id']?>">编辑</a></td>
				</tr>
       	 <?php
       	 }
       	 ?>		
	</table>
	<a href="add.php?id=<?php echo $row['id']?>" class="add">增加</a>
</body>
</html>