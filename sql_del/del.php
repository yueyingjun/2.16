<?php
	include "common.php";
	$id=$_GET["id"];
	$db->query("delete from person where id=".$id);s
	if($db->affected_rows>0){
		echo "<script> alert('删除成功');location.href='4.php'</script>";
	}	
?>