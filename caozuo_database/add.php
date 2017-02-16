<?php
	include "db.php";
	$result=$db->query("insert into person (name,sex,age,adrr) values ('','','','')");
//	echo "<pre>";
//	var_dump($result);
	if($db->affected_rows){
		echo "<script>location.href='do.php'</script>";
	}
?>