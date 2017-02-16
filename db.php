
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<style>
	table{
		width:800px;
		margin:50px auto;
		border:1px solid red;
		border-collapse: collapse;
	}
	table tr{
		width:100%;
		height:50px;
		text-align: center;
		font-size:20px;
		color:indianred;
	}
	th{
		width:150px;
		border:1px solid red;
	}
	.add{
		width:798px;
		height:50px;
		border:1px solid red;
		text-align: center;
		line-height: 50px;
		display: block;
		margin:0 auto;
		margin-top:-51px;
	}
</style>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th></th>
		</tr>
		<?php
			$db=new mysqli("localhost","root","","lianxi1");
	       $db->query("set names utf8");
	       $result=$db->query("select * from lian1");
	      while ($row=$result->fetch_assoc()){
	    ?>
          <tr>
              <td><?php echo $row["name"]?></td>
              <td><?php echo $row["age"]?></td>
              <td><?php echo $row["sex"]?></td>
              <td>
                <a href="del.php?id=<?php echo $row['id']?>">删除</a> <a href="edit.php?id=<?php echo $row['id']?>">编辑</a></td>
          </tr>
          <?php
  }
      ?>
	</table>
	<a href="" class="add">增加</a>
</body>

</html>