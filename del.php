<?php
    header("Content-Type:text/html;charset=utf8");
	$db=new mysqli("localhost","root","","student");
	$id=$_GET["id"];
    $db->query("delete from xinxi where id=".$id);
    if($db->affected_rows>0){
    echo "<script>alert('删除成功');location.href='biaoge.php'</script>";
 }
?>