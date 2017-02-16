<?php
	include "1.php";
 	$id=$_GET["id"];
 	$db->query("insert into student (num,name,age,sex) value ('','','','')");
 	if($db->affected_rows>0){
 		//删除后影响的行数
     	echo "<script>alert('添加成功');location.href='table.php'</script>";
 	}
?>