<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style>
	table{
		width:500px;
		border:1px solid red;
		margin:0 auto;
		border-bottom:none;
	}
	th,td{
		width:150px;
		height: 30px;
		border:1px solid blue;
		text-align: center;
		line-height:30px;
	}
	.add{
		width:498px;height:30px;
        font-size:20px;
        text-align: center;
        line-height: 30px;
        border:1px solid green;
        border-top:none;
        margin:0 auto;
        cursor: pointer;
        display: block;
        text-decoration: none;
        color:green;
	}
</style>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>操作</th>
		</tr>
		<?php
			include "db.php";
			$result=$db->query("select * from newtable1");//查询  结果集
			while ($row=$result->fetch_assoc()){
				//$result->fetch_assoc();//一行一行的输出  保留当前每一行的信息
		?>
		    <tr>
	           	<td><?php echo $row["name"]?></td>
	           	<td><?php echo $row["age"]?></td>
	           	<td>
	           		<a href="del.php?id=<?php echo $row['id']?>">删除</a>
	           		<a href="">编辑</a>
	           	</td>
	       	</tr>
		<?php
	        }
	    ?>
	</table>
	<a href="" class="add">
	    +
	</a>
</body>
</html>