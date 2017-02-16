<?php
	include "delete.php";
	$id=$_GET["id"];	
	$db->query("delete from students where id=".$id);
	if($db->affected_rows>0){		
			echo "<script>alert('删除成功');location.href='studentSystem.php'</script>";
	};
?>