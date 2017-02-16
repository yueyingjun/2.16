<?php
	include "db.php";
	$sql="insert into ht (name,age,sex) values ('','','')";
	$db->query($sql);
	if($db->affected_rows>0){
		echo "<script>alert('添加成功！');location.href='table.php'</script>";
	}
?>