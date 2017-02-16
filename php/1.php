<?php
	include "2.php";
	//包含：可以将 PHP 文件的内容插入另一个 PHP 文件（在服务器执行它之前）。如果您希望继续执行，并向用户输出结果，即使包含文件已丢失，那么请使用 include。
	$id=$_GET["id"];
	$db->query("delete from stu where id=".$id);
	if($db->affected_rows>0){
	echo "<script>alert('删除成功');location.href='1.php'</script>";
	}
?>