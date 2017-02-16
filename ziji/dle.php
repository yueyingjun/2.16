<?php
	include "db.php";
	$id=$_GET["id"];
	$dle=$sql->query("delete from newstu where id=$id");
	echo "<script>alert('删除成功');location.href='bioage.php'</script>";
	
	
?>