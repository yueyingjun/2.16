<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<style>
	table{
		width: 600px;
		border: 1px solid red;
		margin: 0 auto;
		border-bottom: none;
	}
	tr,th{
		width: 25%;
		height: 30px;
		line-height: 30px;
		margin: 0 auto;
	}
	a{
		height: 30px;
		line-height: 30px;
		margin: 0 auto;
		text-decoration: none;
	}
	td{
	border-bottom: 1px solid red;
	margin: 0 auto;
	text-align: center;
	border-collapse: collapse;
	}
	div{
		width: 598px;
		height: 30px;
		line-height: 30px;
		margin: 0 auto;
		text-align: center;
	}
</style>
<body>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>操作</th>
		</tr>
		<?php
			include "db.php";
			$result=$db->query("select * from stu");
			while($row=$result->fetch_assoc()){	
		?>
		    <tr>
		    	<td><?php echo $row["name"]?></td>
		    	<td><?php echo $row["age"]?></td>
		    	<td><?php echo $row["sex"]?></td>
		    	<!--<td><?php echo $row["id"]?></td>-->
		    	<td class="add">
		    		<a href="zen.php?id=<?php echo $row["id"]?>">删除</a>
		    		<a href="bianji.php?id=<?php echo $row["id"]?>">编辑</a>
		    		</td>
		    </tr>
		<?php
		}
	    ?>
	</table>
	<div>
		<a href="" class="jia">增加</a>
	</div>
	
</body>
</html>