<?php
	include "db.php";
	$id=$_GET["id"];
	$db->query("delete from xinxi where id=".$id);
	if($db->affected_rows>0){
     	echo "<script>
     			alert('删除成功');
 				location.href='form.php'  
     		 </script>";
 	}
 	//   location.href=url  当前页面打开URL页面 
 	//	 mysql_affected_rows 取得前一次MySQL操作所影响的记录行数，影响是增删改，如果函数失败，返回-1；
 	//	 mysql_num_rows()返回结果集中行的数目，仅对 select 语句有效。参数是mysql_query返回的结果集ID。
?>