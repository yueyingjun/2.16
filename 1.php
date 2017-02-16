<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
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
    <script src="ajax.js"></script>
	<body>
		<table>
		    <tr>
		      <th>名字</th>
		      <th>年龄</th>
		      <th>性别</th>
		      <th>操作</th>
		    </tr>
		    <?php
		      include "db.php";
		      $sql="select * from stu";
		      $result=$db->query($sql);
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
<a href="" class="add">+</a>
	</body>
</html>
