<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>table</title>
</head>
<?php
	include "db.php";
	$result=$db->query("select * from stu");		
?>
<style>
*{
	margin: 0;
	padding: 0;
	list-style: none;
	text-decoration: none;
}
	table{
		width: 500px;
		border: 1px solid #000;
		margin: 0 auto;
	}
	tr{
		height: 30px;
		line-height: 30px;
		text-align: center;
	}
	.add{
		box-sizing: border-box;
		display: block;
		width: 500px;
		height: 30px;
		line-height: 30px;
		text-align: center;
		border: 1px solid red;
		border-top: none;
		margin: 0 auto;
		font-weight: bold;
	}
</style>
<script type="text/javascript">
	window.onload=function(){
		var btn=document.getElementsByClassName("add")[0];
		btn.onclick=function(){
			location.href="add.php";
		}
	}
</script>
<body>
	<table border="1" cellspacing="0" cellpadding="0">
		<tr>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>籍贯</th>
			<th>操作</th>
		</tr>
		<?php
			include "db.php";
			$result=$db->query("select * from stu");
			while($row=$result->fetch_assoc()){
		?>
		<tr id="<?php echo $row["id"]?>">
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["sex"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["home"]?></td>
			<td>
				<a href="<?php echo 'del.php?id='.$row['id']?>">删除</a>
				<a href="<?php echo 'del.php?id='.$row['id']?>">编辑</a>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
	<a href="javascript:;" class="add">添加</a>
</body>
</html>