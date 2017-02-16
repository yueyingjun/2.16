<?php
 	include "1.php";
 	$id=$_GET["id"];
 	$db->query("delete from student where id=".$id);
 	if($db->affected_rows>0){
 		//删除后影响的行数
     	echo "<script>alert('删除成功');location.href='table.php'</script>";
 	}
?>