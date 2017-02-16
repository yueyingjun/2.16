<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<style>
	table{
		width: 400px;
		margin:0 auto;
		text-align: center;
		border-collapse:collapse;
	}
	.jia{
		display: block;
		width:400px;
		margin: 0 auto;
		border:1px solid #000;
		text-align: center;
	    text-decoration: none;
	    font-weight: bold;
	    font-size:20px;
	}
</style>
<body>
	<table border="1">
		<tr>
			<td>姓名</td>
			<td>年龄</td>
			<td>性别</td>
			<td>籍贯</td>
		    <td>操作</td>
		</tr>
		<?php
		    $mysql=new mysqli("localhost","root","","yuelaoshi");
		    $mysql->query("set names utf8");
		    $result=$mysql->query("select * from stu");
		    while($row=$result->fetch_assoc()){
		?>    	
		    <tr>
		    	<td><?php echo $row["name"]?></td>
		    	<td><?php echo $row["age"]?></td>
		    	<td><?php echo $row["sex"]?></td>
		    	<td><?php echo $row["home"]?></td>
		    	<td>
		    	   <a href="shanchu.php?id=<?php echo $row['id']?>">删除</a> 
		    	   <a href="edit.php?id=<?php echo $row['id']?>">编辑</a>
		    	</td>
		    </tr>
		<?php  
		  }
        ?>
	</table>
	<a href="" class="jia">+</a>
	
</body>
</html>
