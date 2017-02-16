<?php
	header("Content-Type:text/html;charset=UTF-8");
	include "hq.php";
	$db->query("insert into stu(name,age,sex,city) values('','','','')");
	if($db->affected_rows>0){
		echo "<script>alert('添加成功');location.href='shujuku.php'</script>";
	}
?>