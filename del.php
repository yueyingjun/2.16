<?php
	include "sql.php";
	$id=$_GET["id"];
	$db->query("delete from biao where id=".$id);
	if($db->affected_rows>0){
		echo "<script>alert('删除成功');location.href='table.php'</script>";
	}
?>