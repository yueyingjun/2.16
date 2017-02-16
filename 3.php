<?php
	include "2.php";
	$id=$_GET["id"];
	$db->query("delete from sss where id=".$id);
	if($db->affected_rows>0){
		?>
		<script>
		alert("删除成功");
		location.assign("1.php"); 
		</script>			
	<?php	
	}
	?>	
