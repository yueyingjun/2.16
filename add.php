<?php
include "public.php";
$result=$mysql->query("insert into ccc (name,age,sex) values('天泰安'，'24','女')");
$str="";
while($row=$result->fetch_assoc()){
	$str.="<tr>";
		$str="</td>".$row["name"]."</td>";
	$str.="<tr>";
}
echo $str;
?>