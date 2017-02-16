<?php
	$sql=new mysqli("localhost","root","","newstu");
	$sql->query("set name utf8");
//	echo "<script>
//		var type=prompt('请输入要更改的类型');
//		var zhi=prompt('请输入要更改的值');
//		type.slice(0,1);
//		type.slice(0,-1);
//		zhi.slice(0,1);
//		zhi.slice(0,-1);
//		</script>";
	
//	include "db.php";
//	define('name','zhi');
//	echo $type=["<script>prompt('请输入要更改的类型')</script>"];
//	echo $zhi=["<script>prompt('请输入要更改的值')</script>"];
	$id=$_GET["id"];
//	$type=type;
	$bian=$sql->query("update newstu set age=55 where id=$id");
	
//	$sql="update message set name='type',sex='sex',age='zhi' where id=$id";
	
	echo "<script>alert('编辑成功');location.href='bioage.php';</script>";
	
?>