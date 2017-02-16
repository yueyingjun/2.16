
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
<style>
	table{
		width:500px;
		border:1px solid #000;
		margin:0 auto;
		border-collapse: collapse;   /*合并为一个单一的边框*/
	} 
	td,th{
		width:25%;
		border:1px solid #000;
	}
	.add{
		display: block;
		width:498px;
		height:20px;
		border:1px solid #000;
		border-top:0px solid #000;
		text-decoration: none;
		text-align: center;
		line-height: 20px;
		margin:0 auto;
	}
	td a{
		line-height:20px;
		text-align:center;
	}
</style>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>操作</th>
		</tr>
		<?php
          include "public.php";
          $table="select * from student";
          $result=$aa->query($table);
          $row=$result->fetch_assoc();
          while ($row){
         ?>

        <tr>
          <td><?php echo $row["name"]?></td>
          <td><?php echo $row["age"]?></td>
          <td><?php echo $row["sex"]?></td>
          <td>
            <a href="del.php?id=<?php echo $row['id']?>">删除</a> </td>
        </tr>

    <?php
      }
      ?>
	</table>
	<a href="" class="add">+</a>
</body>
</html>