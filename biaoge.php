<?php
	$db=new mysqli("localhost","root","","lianxi1");
	$db->query("set names utf8");
	$result=$db->query("select * from lian1");
	$str="<table>";
	while($row=$result->fetch_assoc()){
		$str.="<tr>";
		$str.="<td>".$row["name"]."</td>";
		$str.="<td>".$row["age"]."</td>";
		$str.="<td>".$row["sex"]."</td>";
		$str.="</tr>";
	}
	$str.="</table>";
	echo $str;
	?>