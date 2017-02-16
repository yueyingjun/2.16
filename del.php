<?php
	include "db.php";
	$id=$_GET["id"];
	$db->query("delete from students where id=".$id);
	if($db->affected_rows>0){
		?>
		<script>
		alert("删除成功");
		location.assign("ajaxtable.php"); 
		</script>			
	<?php	
	}
	?>	
