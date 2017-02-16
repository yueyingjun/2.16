<?php
include "shuju.php";
$id=$_GET["id"];
$db->query("delete from shuju216 where id=".$id);
if($db->affected_rows>0){
	echo "<script>alert('删除成功');location.href='a.php'</script>";
};

?>