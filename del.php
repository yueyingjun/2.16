<?php
 include "db.php";
 $id=$_GET["id"];
 $db->query("delete from study where id=".$id);     //删除表中记录
 if($db->affected_rows>0){
     echo "<script>alert('删除成功');location.href='demo.php'</script>";   //删除成功后跳转
 }

?>