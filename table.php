<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
  <table>
    <tr>
      <th>姓名</th>
      <th>性别</th>
      <th>年龄</th>
      <th>学号</th>
      <th>操作</th>
    </tr>
<?php
    $stu=new mysqli("localhost","root","","weihaichun");
    $stu->query("set names utf8");

      $sql="select * from student";
      $result=$stu->query($sql);//查询一行
      while ($row=$result->fetch_assoc()){
?>

          <tr>
              <td><?php echo $row["姓名"]?></td>
              <td><?php echo $row["性别"]?></td>
              <td><?php echo $row["年龄"]?></td>
              <td><?php echo $row["学号"]?></td>
              <td>
                <a href="del.php?id=<?php echo $row['id']?>">删除</a> 
                <a href="add.php?id=<?php echo $row['id']?>">添加</a>
              </td>
          </tr>

    <?php
      }
      ?>


  </table>	
  <a href="" class="jia">+</a>
</body>
</html>