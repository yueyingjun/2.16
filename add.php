<?php
 	header("Content-Type:text/html;charset=utf-8");
 	$db=new mysqli("localhost","root","","shuju2.16");
 	$db->query("set names utf8");
 	$result=$db->query("insert into shuju216 (name,age,sex) value ('','','')");
 	
 ?>
 <script type="text/javascript">
 	location.href="a.php";
 </script> <?php

?>