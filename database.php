<?php
	header("Content-Type:text/html;charset=utf-8");
	$mysql=new mysqli("localhost","root","","class");
	$mysql->query("set names utf8");
	$result=$mysql->query("select * from stu");
	$str="<table>";
	while($row=$result->fetch_assoc()){
		$str.="<tr>";
		$str.="<td>".$row["name"]."</td>";
		$str.="<td>".$row["age"]."</td>";
		$str.="<td>".$row["sex"]."</td>";
		$str.="</tr>";
	};
	$str.="</table>";
	echo $str;
?>