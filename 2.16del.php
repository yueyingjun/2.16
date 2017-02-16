<?php
	$sq=new mysqli("localhost","root","","test");
	$sq->query("set names utf-8");
	$id=$_GET["id"];
	$sq->query("delete from stu where id=".$id);
	if($sq->affected_rows>0){
		echo "<script> alert('删除成功');location.href='table.php';</script>";
	}
?>