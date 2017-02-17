<?php
	include "1.php";
	$db->query("insert into stu (name,sex,age) values ('','','')");
	if($db->affected_rows>0){
		echo "<script>alert('添加成功!');location.href='stu.php'</script>";
	}
?>