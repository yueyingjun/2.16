<?php
include "public.php";
$id=$_GET["id"];
$result=$mysql->query("delete from ccc where id=".$id);
if($mysql->affected_rows>0){
	echo "<script>alert('删除成功');location.href='1.php'</script>";
}
?>