<?php
	header("Content-Type:text/html;charset=UTF-8");
	include "hq.php";
	$id=$_GET["id"]; //获取传过来的指定id
	$db->query("delete from stu where id=".$id);
	if($db->affected_rows>0){
		echo "<script>alert('删除成功');location.href='shujuku.php'</script>";
	}
?>