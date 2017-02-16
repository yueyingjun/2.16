<?php
$mysql=new mysqli("localhost","root","","stu");
$mysql->query("set names utf8");
$result=$mysql->query("select * from student");
$str="<table>";
while($row=$result->fetch_assoc()){
	$str.="<tr>";
		$str.="<td>".$row["name"]."</td>";
	$str.="</tr>";
}
$str.="</table>";
echo $str;
?>