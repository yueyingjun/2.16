<?php
//	header("Content-Type:text/html;charset=utf-8");
	$sql=new mysqli("localhost","root","","newstu");
	$sql->query("set names GBK");
	$result=$sql->query("select * from newstu");
	$str="<table>";
	while($row=$result->fetch_assoc()){
		$str.="<tr>";
			$str.="<td>".$row["id"]."</td>";
			$str.="<td>".$row["name"]."</td>";
			$str.="<td>".$row["home"]."</td>";
			$str.="<td>".$row["age"]."</td>";
			$str.="<td>".$row["sex"]."</td>";
		$str.="</tr>";
	}
	$str.="</table>";
	echo $str;
	
?>