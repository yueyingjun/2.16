<?php
    include "contact.php";
    $id=$_GET["id"];
    $db->query("delete from person where id=$id");
    if($db->affected_rows){
        echo "<script>location.href='table.php'</script>";
    }
?>
