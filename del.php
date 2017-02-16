<?php
    include "public.php";
    $id=$_GET["id"];
    $aa->query("delete from student where id=$id");
    while($aa->affected_rows>0){
    	echo "<script>alert('删除成功');href='mysql.php'</script>";
    }
?>