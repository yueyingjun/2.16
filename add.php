<?php
include "bd.php";
$id=$_GET["id"];
$db->query("insert into hu (num,name,age,sex) value ('','','','')");
if($db->affected_rows>0){
	echo "<script>alert('添加成功');location.href='insert.php'</script>";
}
?>