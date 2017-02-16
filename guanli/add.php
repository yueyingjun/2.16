<?php
	include "db.php";
	$db->query("insert into xinxi (num,name,sex,age) values ('','','','')");
	if($db->affected_rows>0){
     	echo "<script>
 				location.href='form.php'  
     		 </script>";
 	}
?>