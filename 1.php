<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<style>
	table{
		margin: 0 auto;
		border: 1px solid black;
		width: 500px;
	}
	tr{
		border: 1px solid black;
	}
	td{
		border: 1px solid black;
		text-align: center;
	}
	div{
		width: 500px;
		height: 24px;
		line-height: 24px;
		background: red;
		color: white;
		text-align: center;
		margin: 0 auto;
		cursor: pointer;
		border-radius: 5px;
	}
	.del{
		background: blue;
	}
	.del a{
		color: white;

	}
</style>
<body>
	<table>
		<tr>
			<td>姓名</td>
			<td>年龄</td>
			<td>性别</td>
			<td>编辑</td>
		</tr>
		<?php
			header("Content-Type:text/html;charset=utf8");
			$db=new mysqli("localhost","root","","zhaojie");
			$db->query("set names utf8");
			$result=$db->query("select * from stu");
			while($row=$result->fetch_assoc()){
		?>		
			<tr id="<?php echo $row['id']?>">
			<td>
				<?php
					echo $row["name"];
					
				?>
			</td>
			<td>
				<?php
					echo $row["age"];
					
				?>
			</td>
			<td>
				<?php
					echo $row["sex"];
					
				?>
			</td>
			<td  class="del">
				<a href="del.php?id=<?php
					echo $row["id"];
				?>">删除</a>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
	<div>
		+
	</div>
</body>

</html>