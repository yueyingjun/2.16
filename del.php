<?php
 $stu=new mysqli("localhost","root","","weihaichun");
 $stu->query("set names utf8");
 $id=$_GET["id"];
 $stu->query("delete from student where id=".$id);
 if($stu->affected_rows>0){
     echo "<script>alert('删除成功');location.href='table.php'</script>";
 }
?>