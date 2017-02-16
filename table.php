<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<style type="text/css">
		table{
			width: 1000px;
			height: auto;
			overflow: hidden;
			border-collapse: collapse;
			margin:0 auto;
		}
		td,th{
			width: 25%;
			height: 30px;
			line-height: 30px;
			text-align: center;
			border: 1px solid black;
		}
		.add{
			width:100px;
			height: 30px;
			background: pink;
			display: block;
			line-height: 30px;
			text-align: center;
			margin:0 auto;
			margin-top:10px;
			cursor: pointer;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<table>
		<tr><th>姓名</th><th>性别</th><th>年龄</th><th></th></tr>
		<?php
	        include "db.php";
	        $sql="select * from stu";
	        $result=$db->query($sql);//结果集
	        while($row=$result->fetch_assoc()){//将结果一行一行输出
	       ?>
	       <tr id="<?php echo $row['id']?>">
	           <td><?php echo $row["name"]?></td>
	           <td><?php echo $row["sex"]?></td>
	           <td><?php echo $row["age"]?></td>
	           <td class="remove">
	           		<a href="del.php?id=<?php echo $row['id']?>">删除</a>
	           		<a href="update.php?id=<?php echo $row['id']?>">编辑</a>
	           	</td>
	       </tr>
       <?php
        }
      ?>
	</table>
	<a class="add">+</a>
	<script type="text/javascript">
		window.onload=function(){
			var add=document.getElementsByClassName("add")[0];
			add.onclick=function(){
				location.href="add.php";
			}
		}
	</script>
</body>
</html>
