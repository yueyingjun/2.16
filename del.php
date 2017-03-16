<?php
include "bd.php";
$id=$_GET["id"];
$db->query("delete from hu where id=".$id);
if($db->affected_rows>0){
	echo "<script>alert('删除成功');location.href='insert.php'</script>";
}
?>