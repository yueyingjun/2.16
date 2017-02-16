<?php
	include "public.php";
	$id=$_GET["id"];
	$db->query("delete from stu where id=".$id);
	if($db->affected_rows>0){
			//mysql_affected_rows() 函数返回前一次 MySQL 操作所影响的记录行数;
 	//执行成功，则返回受影响的行的数目，如果最近一次查询失败的话，函数返回 -1
		echo "<script>alert('删除成功');location.href='1.php'</script>";
	}
?>