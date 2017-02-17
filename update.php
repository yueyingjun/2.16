<?php
	include "contact.php";
	$result=$db->query("insert into person (name,age,sex) values ('','','')");
	if($db->affected_rows){
		echo "<script>location.href='table.php'</script>";
	}
?>