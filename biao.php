<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<style>
	table{
		height: 200px;
		width: 498px;
		margin: 0 auto;
		border:1px solid #000;
	}
	tr{
		height: 40px;
		width:100%;
		border-bottom: 1px solid #000;
	}
	td{
		height:40px ;
		width: 100px;
		line-height: 40px;
		text-align: center;
	}
	.add{
		width: 498px;
		display: block;
		height: 30px;
		line-height: 30px;
		text-align: center;
		margin: 0 auto;
		border: 1px solid #000;
		border-top: none;
		text-decoration: none;
		background: pink;
		color: #fff;
	}
</style>
<body>
	
	<table>
		<tr>
			<td>姓名</td>
			<td>年龄</td>
			<td>性别</td>
		</tr>
		
		<?php
			
	    include "db.php";
	    $result=$db->query("select * from li");
		while($row=$result->fetch_assoc()){	
	    ?>
	    <tr id="<?php echo $row["id"]?>">
	    	<td><?php echo $row["name"]?></td> 
	    	<td><?php echo $row["age"]?></td> 
	    	<td><?php echo $row["sex"]?></td> 
	    	<td><a href="shan.php?id=<?php echo $row["id"]?>">删除</a></td>
	    </tr>
	    <?php
		}
		?>
	</table>
	<a href="" class="add">+</a>
</body>
</html>