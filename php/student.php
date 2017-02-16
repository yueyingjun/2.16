<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>student</title>
	<style>
		.box{
			width: 500px;
			height: auto;
			margin:40px auto;
			border:1px solid red;
			padding: 10px;

		}
		.add{
			width: 80px;
			height:30px;
			background: green;
			margin:10px auto;
			color: #fff;
			font-weight: bold;
			/*font-size:20px;*/
			height: 30px;
			text-align: center;
			line-height: 30px;
			border-radius: 3px;

		}
		.add:active{
			opacity: 0.8;
		}
		td,th{
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
			padding: 5px 0;
		}
		table{
			width: 100%;
			border-collapse: collapse;
			text-align: center;
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
		}
		caption{
			margin:5px 0;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<div class="box">
		<table>
			<caption>学生信息表</caption>
			<thead >
				<tr><th>姓名</th><th>性别</th><th>年龄</th><th>地址</th><th>操作</th></tr>
			</thead>
			<tbody>


			<?php
				include "database.php";
				$sql="select * from stustu";
				$result=$cont->query($sql);
				while($row=$result->fetch_assoc()){
					
				
			?>



				<tr><td><?php echo $row["name"] ?></td><td><?php echo $row["sex"] ?></td><td><?php echo $row["aga"] ?></td><td><?php echo $row["home"] ?></td><td><a href="delete.php?id=<?php echo $row["id"] ?>">删除</a> | <a href="javascript:;">编辑</a></td></tr>

			<?php
				}
			?>

			</tbody>
		</table>
		<div class="add">添加</div>
	</div>
	
</body>
</html>


