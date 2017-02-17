<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	
<style type="text/css">
	
	
	
	    table{
	      width:600px;
          border:1px solid skyblue;
	      border-collapse: collapse;
	      margin:0 auto;
	    }
	    
	    
	    
	    td,th{
	      border:1px solid skyblue;
	    }
	    
	    
	    .aa{
	      width:598px;
	      height:30px;
	      border:1px solid skyblue;
	      border-top:none;text-align: center;
	      line-height:30px ;margin:0 auto;
	      text-decoration: none; 
	      display: block;
	      
	   
	    }
</style>
	
	
	
	
	
	
</head>
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


<a href="" class="aa">+</a>
</body>
</html>