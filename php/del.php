<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<style>
    table{
      width:600px;
      border:1px solid #000;
      margin:0 auto;
      border-collapse: collapse;
    }
    td,th{
      border:1px solid #000;
    }
  .add{
    display: block;
    width: 598px;
    height: 30px;
    border: 1px solid #000;
    margin: 0 auto;
    border-top: none;
    text-align: center;
    line-height: 30px;
    text-decoration: none;
  }
  a{
    min-width: 
    color: #fff;
    font-style: 24px;
    background: orange;
    text-decoration: none;
  }
  a:hover{
    opacity: 0.85;
  }
  .del{
    margin-right: 10px;
  }
</style>
<body>
  <table>
    <tr>
      <th>名字</th>
      <th>性别</th>
      <th>年龄</th>
      <th>住址</th>
      <th>操作</th>
    </tr>
    <?php
      include "2.php";
      $sql="select * from stu";
      $result=$db->query($sql);/*执行一个查询
      //引用一个类的属性和方法就使用->符号。*/
      while ($row=$result->fetch_assoc()){
    ?>   
        <tr>
          <td><?php echo $row["name"] ?></td>
          <td><?php echo $row["sex"] ?></td>
          <td><?php echo $row["age"] ?></td>
          <td><?php echo $row["home"] ?></td>
          <td><a href="1.php?id=<?php echo $row['id']?>" class="del">删除</a><a href="javascript:;" class="bian">编辑</a></td>
        </tr>
    <?php 
      }
    ?>
    
  </table>
  <a href="2.php" class="add">+</a>
</body>
</html>