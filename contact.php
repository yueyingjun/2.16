<?php
    $data=new mysqli("127.0.0.1","root","","1603class");
    $data->query("set names utf8"); //���û�ȡ�����ݵı���
    $id=$_GET["id"];
    $data->query("delete from id=$id");
    while($data->affected_rows){
        echo "<script>location.href='table.php'</script>";
    }
?>