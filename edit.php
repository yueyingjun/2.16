<?php
	include "delete.php";
	$name=$_GET["name"];	
	$sex=$_GET["sex"];	
	$age=$_GET["age"];	
	$id=$_GET["id"];	
	$db->query("update students set name='".$name."' where id=".$id);
	$db->query("update students set sex='".$sex."' where id=".$id);
	$db->query("update students set age='".$age."' where id=".$id);
	if($db->affected_rows>0){		
			echo "<script>alert('更新成功');location.href='studentSystem.php'</script>";
	};
?>