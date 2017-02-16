<html>
<head>
	<title></title>
</head>
<style>
    table{
      width:600px;margin:0 auto;
      border:1px solid #000;
      border-collapse: collapse;
    }
    td,th{
      border:1px solid #000;
    }
    .add{
      display: block;
      width:598px;border:1px solid #000;
      height:30px;
      border-top:none;text-align: center;
      line-height:30px ;margin:0 auto;
      text-decoration: none;
    }
  </style>
<body>
<table>
	<tr>
		<th>学号</th>
		<th>名字</th>
		<th>性别</th>
		<th>年龄</th>
		<th>操作</th>
	</tr>
	<?php
		include "lianjie.php";
		$sql="select * from student";
		$result=$lianjie->query($sql);
		while($row=$result->fetch_assoc()){
	?>		
			<tr><?php echo $row["num"]?></tr>
			<tr><?php echo $row["name"]?></tr>
			<tr><?php echo $row["age"]?></tr>
			<tr><?php echo $row["sex"]?></tr>
			<tr><a href="dele.php?id=<?php echo $row['id']?>">删除</a><a href="edt.php?id=<?php echo $row['id']?>">编辑</a></tr>
	<?php
		}
	?>
	
</table>
<a href="" class="add">+</a>
</body>
</html>