<?php
	include "db.php";
	$id=$_GET["id"];
	$class=$_GET["class"];
	$value=$_GET["value"];
//	echo $id,$class,$value;
	$sql="update ht set {$class}='{$value}' where id=".$id;
	$db->query($sql);
	if($db->affected_rows>0){
		echo "<script>location.href='table.php'</script>";
	}
?>