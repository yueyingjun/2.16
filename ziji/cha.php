<?php
	include "db.php";
	$sql = "select * from message";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result){
	 	echo $row["name"];
	 	echo $row["sex"];
	 	echo $row["age"];
	}
	
	
	
?>