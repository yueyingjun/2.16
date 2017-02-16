<?php
include "db.php";
$id=$_GET["id"];
$db->query("delete from stu where id=".$id);
if($db->affected_rows>0){//删除时影响的行数
echo "<script>alert('删除成功');location.href='1.php'</script>";//删除后跳转，返回1.php
}
?>
