<?php
	include "db.php";
	$id=$_GET["id"];
	$sql="delete from stu where id=".$id;
	$db->query($sql);
	if($db->affected_rows>0){
		echo "<script>alert('删除成功');location.href='table.php'</script>";
	}
?>