<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>增删改查</title>
</head>
<style>
    table{
        width: 400px;
        margin: 0 auto;
        /*border:1px solid #000;*/
        border-collapse: collapse;
    }
    th,td{
        width: 20%;
        border:1px solid #000;
        text-align: center;
        height: 20px;
        line-height: 20px;
    }
    td a{
        font-size: 12px;
        margin: 0 2px;
        color: red;
    }
    .add{
        display: block;
        width: 398px;
        border:1px solid #000;
        height: 20px;
        line-height: 20px;
        text-align: center;
        margin: 0 auto;
        border-top:none;
        text-decoration: none;

    }
</style>
<body>
    <table>
        <tr>
        <th>id</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>性别</th>
        <th>操作</th>
        </tr>
    </table>
<?php
include "db.php";
$result=$db->query("select * from student");
$str="<table>";
while($row=$result->fetch_assoc()){
    $str.="<tr>";
    $str.="<td>".$row["id"]."</td>";
    $str.="<td>".$row["name"]."</td>";
    $str.="<td>".$row["age"]."</td>";
    $str.="<td>".$row["sex"]."</td>";
    $str.="<td><a href='del.php?id=".$row['id']."'>删除</a></td>";
    $str.="</tr>";
}
$str.="</table>";
echo $str;
?>
    <a href=""class="add">+</a>
</body>
</html>