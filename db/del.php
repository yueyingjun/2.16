<?php
include "db.php";
$id=$_GET["id"];
$del=$db->query("delete from student where id=$id");
if($del==$id){
    echo "<script>alert('删除成功');location.href='caozuo.php';</script>";
}
?>