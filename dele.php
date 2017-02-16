<?php
 include "lianjie.php";
 $id=$_GET["id"];
 $lianjie->query("delete from student where id=".$id);
 if($lianjie->affected_rows>0){
     echo "<script>alert('删除成功');location.href='1.php'</script>";
 }
?>