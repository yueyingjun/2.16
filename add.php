<?php
	include "db.php";
	$result=$db->query("insert into stu (name,sex,age,home) values ('','','','')");
	if($db->affected_rows){
		echo "<script>location.href='table.php'</script>";
	}
?>