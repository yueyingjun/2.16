<?php

header("Content-Type:text/html;charset=utf8");
$db=new mysqli("localhost","root","","zhaojie");
$db->query("set names utf8");
$id=$_GET["id"];
$db->query("delete from stu where id=".$id);
if($db->affected_rows>0){
    include "1.php";
?>	
    <script>
    	alert("删除成功")；
    	location="1.php";
    </script>
    <?php
}
    ?>
