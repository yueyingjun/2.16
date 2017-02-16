<?php
	include "db.php";
	$id=$_GET["id"];
	$db->query("delete from stu where id=".$id);
	if($db->affected_rows>0){//删除时影响的函数
    	echo "<script>alert('删除成功');location.href='table.php'</script>";
	}
?>