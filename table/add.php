<?php
 	include "again.php";
 	$sql="insert into stu (`name`,`age`,`sex`) values ('','','')";
 	$res=$db->query($sql);
 	if($db->affected_rows>0){
		echo '<script>alert("添加成功");location.href="biao.php"</script>';
	}else{
		echo '<script>alert("添加失败");location.href="biao.php"</script>';
	}
?>