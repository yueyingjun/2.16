<?php
 include "db.php";
 $id=$_GET["id"];
 $db->query("delete from stu where id=$id");
 if($db->affected_rows>0){
     echo "<script>alert('删除成功');location.href='studenttable.php'</script>";
 }
 
 
 
 
 
 
 
 
 
 
?>