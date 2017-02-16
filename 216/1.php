<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>

<!--1.实现数据库的编辑  添加   删除-->

<style>
    table{
        width:1000px;
        border-collapse:collapse;
        margin: 0 auto;
        border:1px solid #000;
    }
    .add{
        display: block;
        width:998px;
        height:30px;
        font-size:20px;
        text-align: center;
        line-height: 30px;
        border:1px solid #000;
        border-top:none;
        margin:0 auto;
        cursor: pointer;
        text-decoration: none;
        color:#FF0000;
    }
    th,td{
        border:1px solid #000;
        text-align: center;
    }
</style>
<body>
<table>
    <tr>
        <th>姓名</th>
        <th>年龄</th>
        <th>性别</th>
        <th>操作</th>
    </tr>
    <?php
    include "db.php";
    $result=$db->query("select * from stu");//查询的结果集
    while($row=$result->fetch_assoc()){//一行行输出 保留当前每一行的信息
        ?>
<!--        数据库中的信息放入html中-->
        <tr id="<?php echo $row['id']?>">
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["sex"]?></td>
            <td><?php echo $row["age"]?></td>
            <td><a href="del.php?id=<?php echo $row['id']?>">删除</a>&nbsp;<a href="?id=<?php echo $row['id']?>">编辑</a></td>
        </tr>

        <?php
    }
    ?>
</table>
<a href="javascript:;" class="add">+</a>
</body>
<script>
    var add=document.getElementsByClassName("add")[0];
    add.onclick=function(){
        location.href="add.php";
    }
</script>
</html>