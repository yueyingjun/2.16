<?php
 include "db.php";//连接数据库和字符集放到一个文件中，省着写了
 $id=$_GET["id"]; //获取id
 $db->query("delete from stu where id=".$id);//查询
 if($db->affected_rows>0){  //判断，弹出然后返回
     echo "<script>alert('删除成功');location.href='1.php'</script>";
 }



?>