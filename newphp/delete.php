<?php
	$_info=new mysqli('localhost','root','','qq');
	$_info->query("set names utf8");
	$result=$_info->query("select * from newqq");
	$id=$_GET["id"];
	$_info->query("delete from newqq where id=".$id);
	if($_info->affected_rows>0){echo "<script>alert('删除成功');location.href='aa.php'</script>";}
?>