<?php
	include "db.php";
	$id=$_GET["id"];
	$db->query("delete from newtable1 where id=".$id);
	if($db->affected_rows>0){//删除时它影响的行数
		echo "<script>alert('删除成功');location.href='select.php'</script>";
};
?>