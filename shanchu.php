<?php
   $mysql=new mysqli("localhost","root","","yuelaoshi");
   $mysql->query("set names utf8");
   $id=$_GET["id"];
   $result=$mysql->query("delete from stu where id=".$id);
   if($mysql->affected_rows>0){
   	 echo "<script>alert('删除成功');location.href='biaoge.php'</script>";
   }
?>