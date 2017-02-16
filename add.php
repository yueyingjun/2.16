<?php
	include "db.php";
	$db->query("insert into stu () value ()");
	if($db->affected_rows>0){
    	echo "<script>alert('添加成功');location.href='table.php'</script>";
	}
?>