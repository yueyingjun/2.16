<?php
include "db.php";
$id=$_GET["id"];
$db->query("delete from information where id=".$id);
if ($db->affected_rows>0) {
	?>
	<script>
	alert("确认删除？");
	location.assign("test.php");

	</script>
}
<?php
}
?>