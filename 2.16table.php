<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<style type="text/css">
	table{
		width: 500px;
		height: auto;
		table-layout: fixed;
		border-collapse:collapse;
		margin: 0 auto;
}
	tr{
		height: 30px;
	
	}
	th,td{
		width:20%;
		height: 30px;
		text-align: center;
		line-height:30px; 
		border:1px solid #000;
		margin: 0 auto;	
	}
	a{
		height: 30px;
		line-height: 30px;
		margin: 0 auto;
		text-decoration: none;
	}
	#add{
      width:498px;
      height:28px;
      border:1px solid #000;
      border-top:none;
      font-size: 20px;
      color: red;
      text-align: center;
      line-height:30px ;
      margin:0 auto;
      text-decoration: none;
      display: block;
    }
</style>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>所在地</th>
			<th>操作</th>
		</tr>	
			<?php
				$sq=new mysqli("localhost","root","","test");
				$sq->query("set names utf-8");
				$result=$sq->query("select * from stu");
				while($row=$result->fetch_assoc()){	   
			?>
		<tr>
			<td><?php echo $row["name"] ?></td>
			<td><?php echo $row["age"] ?></td>
			<td><?php echo $row["sex"] ?></td>
			<td><?php echo $row["home"] ?></td>
			<td>
				<a href="del.php?id=<?php echo $row["id"]?>">删除</a>
			</td>
		</tr>
			<?php
				}
			?>	
	</table>
	<a href="" id="add">添加</a>
</body>
</html>



