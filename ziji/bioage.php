<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>表格</title>
</head>
<style>
*{
	margin:0;
	text-decoration: none;
	padding: 0;
}
table{
	table-layout: fixed;
	width: 1000px;
	height: 100%;
	border: 1px solid black;
	border-collapse: collapse;
	margin: 0 auto;
	box-shadow: 0 0 4px black;
}

.title{
	width:100%;
	height: 40px;
	text-align: center;
	line-height: 40px;
	font-width: bold;
}
.add{
	width: 100px;
	height: 30px;
	margin: 20px auto;
	border-radius: 5px;
	background: yellowgreen;
	line-height: 30px;
	text-align: center;
	cursor: pointer;
	border-radius: 5px;
	box-shadow: 0 0 4px black;
	border: 1px solid black;
}
.shanchu{
	display:block;
	width: 50%;
	height: 25px;
	margin:0 auto;
	text-align: center;
	line-height: 25px;
	background: red;
	cursor: pointer;
	border-radius: 5px;
	border:1px solid black;
	color: white;
	margin-top:1px;
	box-shadow: 0 0 4px black;
}
.bianji{
	display:block;
	width: 50%;
	height: 25px;
	margin:0 auto;
	text-align: center;
	line-height: 25px;
	background: red;
	cursor: pointer;
	border-radius: 5px;
	border:1px solid black;
	color: white;
	margin-top:1px;
	box-shadow: 0 0 4px black;
}
tr{
	height: 30px;
	text-align: center;
}
td,th{
	width: 20%;
	border-bottom: 1px solid black;
	border-right: 1px solid black;
}
.tijiao{
	width: 1000px;
	height: 40px;
	text-align: center;
	line-height: 40px;
	border-bottom: 1px solid black;
	margin: 0 auto;
}
</style>
<body>
	<div>
		<div class="title">学生管理系统</div>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<th>学号</th>
				<th>姓名</th>
				<th>性别</th>
				<th>年龄</th>
				<th>删除操作</th>
				<th>编辑操作</th>
			</tr>
		</table>
			<?php
				$sql=new mysqli("localhost","root","","newstu");
				$sql->query("set names utf8");
				$result=$sql->query("select * from newstu");
				$str="<table>";
				while($row=$result->fetch_assoc()){
					$str.="<tr>";
						$str.="<td>".$row["id"]."</td>";
						$str.="<td>".$row["name"]."</td>";
						$str.="<td>".$row["sex"]."</td>";
						$str.="<td>".$row["age"]."</td>";
						$str.="<td><a href='dle.php?id=".$row['id']."' class='shanchu'>删除</a></td>";
						$str.="<td><a href='bian.php?id=".$row['id']."' class='bianji'>编辑</a></td>";
					$str.="</tr>";
				}
				$str.="</table>";
				echo $str;
			?>

		<div class="tijiao"><div class="add">添加</div></div>
	</div>
</body>
</html>