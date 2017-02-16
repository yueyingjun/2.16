<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>操作表格</title>
	<style>
		table{
			width:600px;
			border: 1px solid red;
			border-collapse: collapse;
			margin: 0 auto;
		}
		td,th{
			border: 1px solid red;
			text-align: center;
		}
		a{
			text-decoration:none;
		}
		.add{
			display: block;
			width: 598px;
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
	<table>
		<tr>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>籍贯</th>
			<th>操作</th>
		</tr>
		<?php
			include "db.php";
			$result=$db->query("select * from person");
//			$row=$result->fetch_assoc();
//			var_dump($row);
			while($row=$result->fetch_assoc()){
		?>
				<tr id="<?php echo $row["id"]?>">
					<td><?php echo $row["name"]?></td>
					<td><?php echo $row["sex"]?></td>
					<td><?php echo $row["age"]?></td>
					<td><?php echo $row["adrr"]?></td>
					<td>
						<a href="<?php echo 'del.php?id='.$row['id']?>">删除</a>
						<a href="<?php echo 'edit.php?id='.$row['id']?>">编辑</a>
					</td>
				</tr>
		 <?php
		 	}
		 ?>	
	</table>
	<a href="javascript:;" class="add">添加</a>
</head>
</html>
