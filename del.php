<?php
	header("Content-Type:text/html;charset=utf-8");
	$mysql=new mysqli("localhost","root","","class");
	$mysql->query("set names utf8");
	$id=$_GET["id"];
	$result=$mysql->query("delete from stu where id={$id}");
	
?><script type="text/javascript">
	location.href="table.php";
</script>