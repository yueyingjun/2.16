<?php
   include "db.php";
   $db->query("insert into stu (num,name,age,sex)value('','','','')");
   if($db->affected_rows>0){
		echo "<script>location.href='jia.php'</script>";
	}
?>