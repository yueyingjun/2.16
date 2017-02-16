<?php
	include "sheng.php";
	$id=$GET["id"];
	$db->query("delete from students where id=".$id)
    if($db->affected_rows>0){
    	echo "<script>alert('删除ok!');location.href='stu.php'</script>"
    }
?>