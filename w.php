<!doctype html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport"

        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Document</title>

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

</head>

<body>

  <table>

    <tr>

      <th>����</th>

      <th>����</th>

      <th>�Ա�</th>

      <th>����</th>

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

                <a href="del.php?id=<?php echo $row['id']?>">ɾ��</a> <a href="edit.php?id=<?php echo $row['id']?>">�༭</a></td>

          </tr>



    <?php

      }

      ?>





  </table>

  <a href="" class="add">+</a>

</body>

</html>

