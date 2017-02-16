<?php
	include "again.php";
	$id=$_GET["id"];
	$res=$db->query("delete from stu where id=".$id);
	if($db->affected_rows>0){
		echo '<script>alert("删除成功");location.href="biao.php"</script>';
	}else{
		echo '<script>alert("删除失败");location.href="biao.php"</script>'
	}
?>