<?php
	include 'database.php';
	$id=$_GET["id"];
	$sql="delete from stustu where id=".$id;
	$cont->query($sql);
	if($cont->affected_rows>0){
     echo "<script>alert('删除成功');location.href='student.php'</script>";
 }
?>