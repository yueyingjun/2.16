<?php
	include "1.php";
	$id=$_GET["id"];
	$dp->query("delete from guanlixitong where id=".$id);
	if($dp->affected_rows>0){
		echo "<script>alert('删除成功');location.href='2.php</script>";
	}
?>