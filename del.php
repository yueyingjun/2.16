<?php
include "mysql.php";
$id=$_GET["id"];
$mysql->query("delete from student where id=".$id);
if($mysql->affected_rows>0){
	echo "<script>alert('删除成功');location.href='index.php'</script>";
}
?>