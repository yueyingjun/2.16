<?php
	 include "db.php";
	 $id=$_GET["id"];
	 $db->query("delete from grades where 学号=$id");//返回的是删除的个数
	 echo $id;
	 if($db->affected_rows>0){//说明存在行可以删除
	     echo "<script>
		     		alert('删除成功');
		     		location.href='table.php'
	     	   </script>";
   		}
?>