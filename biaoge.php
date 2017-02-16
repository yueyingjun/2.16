<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<style>
	table{
		width: 500px;
		height: 50px;
		border:1px solid red;
		margin:0 auto;
		border-collapse: collapse;
	}
	td,th{
		width: 500px;
		height: 50px;
		border:1px solid red;
		margin:0 auto;
		
	}
</style>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>性别</th>
			<th>住址</th>
			<th>年龄</th>
			<th></th>
		</tr>
		
		<?php
            header("Content-Type:text/html;charset=utf8");
			$db=new mysqli("localhost","root","","student");
			$db->query("set names utf8");
			$sql="select * from xinxi";
            $result=$db->query($sql);
			while ($row=$result->fetch_assoc()){
		?>

          <tr>
              <td><?php echo $row["name"]?></td>
              <td><?php echo $row["sex"]?></td>
              <td><?php echo $row["home"]?></td>
              <td><?php echo $row["age"]?></td>
              <td><a href="del.php?id=<?php echo $row['id']?>">删除</a></td>
          </tr>

        <?php
            }
        ?>
	</table>
</body>
</html>