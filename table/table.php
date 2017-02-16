<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<style>
		table{
			width:800px;
			border:1px solid #000;
			margin:0 auto;
			border-collapse: collapse;
		}
		th,td{
			width:30%;
			border: 1px solid #000;
			text-align: center;
		}
		.add{
			display: block;
			width:798px;
			height:30px;
			border:1px solid green;
			border-top:none;
			margin:0 auto;
			text-align: center;
			line-height: 30px;
			font-size: 30px;
			font-weight: bold;
			color:green;
			text-decoration: none;
		}
	</style>
	<body>
		<table>
			<tr>
				<th>姓名</th>
				<th>年龄</th>
				<th>性别</th>
				<th>操作</th>
			</tr>
			<?php
				include "db.php";
				$sql="select * from ht";
				$result=$db->query($sql);
				while($row=$result->fetch_assoc()){
			?>
				<tr id="<?php echo $row['id']?>">
		          	<td class="name"><?php echo $row["name"]?></td>
		            <td class="age"><?php echo $row["age"]?></td>
		            <td class="sex"><?php echo $row["sex"]?></td>
		            <td class="del">
		            	<a href="del.php?id=<?php echo $row['id']?>">删除</a>
		            	<a href="bj.php?id=<?php echo $row['id']?>">编辑</a>
		            </td>
		       	</tr>
			<?php
				}
			?>
		</table>
		<a href="add.php" class="add">+</a>
	</body>
</html>

<script>
	var table=document.getElementsByTagName("table")[0];
	var tr=document.getElementsByTagName("tr");
	var td=document.getElementsByTagName("td");
	table.ondblclick=function(e){
		var e=e||window.event;
		var thisobj=e.target;
		if(thisobj.nodeName=="TH"||thisobj.className=="del"){
			return;
		}
		oldvalue=thisobj.innerHTML;
//		console.log(oldvalue);
//		console.log(thisobj.parentNode.id)
//		console.log(thisobj.className)
		thisobj.innerHTML="";
		var input=document.createElement("input");
		input.value=oldvalue;
		thisobj.appendChild(input);
		input.onblur=function(){
			var newinputvalue=input.value;
			if(newinputvalue==oldvalue){
				thisobj.innerHTML=oldvalue;
			}else{
				var id=thisobj.parentNode.id;
				var classname=thisobj.className;
				thisobj.innerHTML=newinputvalue;
				location.href="update.php?id="+id+"&class="+classname+"&value="+newinputvalue;
//				console.log(id+"---"+classname+"---"+newinputvalue)
			}
		}
		
	}
</script>