<?php
//连接数据库
$db=new mysqli("localhost","root","","512class");
//查询数据库语言
$db->query("set names utf8");
//echo "<pre>";
//查询结果集
$result=$db->query("select * from student");
//可将查找的每一行的结果放在页面中 关联数组形式
//while($row=$result->fetch_assoc()){
//  var_dump($row);
//}
//创建一个表格，把信息放在页面中
$str="<table>";
while($row=$result->fetch_assoc()){
	$str.="<tr><td>".$row["name"]."</td>";
	$str.="<td>".$row["age"]."</td>";
	$str.="<td>".$row["sex"]."</td></tr>";
}
$str.="</table>";
echo $str;
//做一个表格



?>