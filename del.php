<?php
	include "public.php";
	$id=$_GET["id"];
	$del="delete from stu where id={$id}";
	$result=$zy->query($del);
	
?>
<script>location.href="1.php"</script>;