<?php
	include "delete.php";
/*	$name=$_GET["name"];
	$sex=$_GET["sex"];
	$age=$_GET["age"];*/
	$db->query("insert into students (name,sex,age) values ('','','')");
	if($db->affected_rows>0){		
			echo "<script>alert('添加成功');location.href='studentSystem.php'</script>";
	};
?>