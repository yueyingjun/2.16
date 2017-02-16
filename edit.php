<?php
	include "1.php";
	$db->query("update stu set ");
	if($db->affected_rows){
		echo "<script>alert('修改成功!');location.href='stu.php'</script>";
	}
?>