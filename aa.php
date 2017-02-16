+<?php
	header("Content-Type:text/html;charset=utf-8");
	$mysql=new mysqli("localhost","root","","class");
	$mysql->query("set names utf8");
	$result=$mysql->query("insert into stu (name,age,sex) value ('','','')");
	
?><script type="text/javascript">
	location.href="table.php";
</script>