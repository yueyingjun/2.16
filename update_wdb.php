<?php
 include "db.php";
 $id=$_GET["id"];
 $name=$_GET["name"];
 $val=$_GET["val"];
 $db->query("update newtable1 set {$name}='{$val}' where id=".$id);
if($db->affected_rows>0){
	echo "<script>location.href='select.php'</script>";
}

?>