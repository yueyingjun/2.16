<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<script src="ajax.js"></script>
<style>
	table{
		width: 900px;
		border: 1px solid black;
		margin: 0 auto;
		border-collapse: collapse;
		text-align: center;
	}
	tr{
		height:30px;
		line-height: 30px;
	}
	td{
		width:20%;
		border: 1px solid black;
	}
	.add{
		display: block;
		margin: 0 auto;
		line-height: 30px;
		width: 898px;
		height: 30px;
		text-decoration: none;
		border: 1px solid black;
		border-top: 0;
		text-align: center;
	}
	a{
		display: block;
	}
</style>
<body>
	<table>
		<tr>
			<td>姓名</td>
			<td>性别</td>
			<td>年龄</td>
			<td></td>
			<td></td>
		</tr>
<?php
		include "delete.php";
		$result=$db->query("select * from students");
		while($row=$result->fetch_assoc()){
?>	
		<tr>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["sex"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><a href="remove.php?id=<?php echo $row["id"]?>">删除</a></td>
			<td ><a class="edit"id="<?php echo $row["id"]?>">编辑上传</a></td>
		</tr>
<?php
		}
?>
	</table>
	<a class="add"href="add.php">创建行/添加空数据</a>
	<script>
	window.onload=function(){
		var tbody=document.getElementsByTagName("tbody")[0];
		var edit=document.getElementsByClassName("edit");
		tbody.onclick=function(e){
			var ev=e||window.event;
			var obj=ev.target||ev.srcElement;
			if(obj.nodeName=="TD"){
				var input=document.createElement("input");
				var value=obj.innerHTML;
				console.log(value);
				obj.innerHTML="";
				obj.appendChild(input);
				if(value!=undefined){
					input.value=value;
				}
				input.focus();
				input.onblur=function(){
					var val=input.value;
					obj.removeChild(input);
					obj.innerHTML=val;
				}
			}
		}
		
		for(var i=0;i<edit.length;i++){
			edit[i].onclick=function(){
				var edits=this.parentNode.parentNode.childNodes;
				var id=this.id;
				//console.log(edits);
				var str="id="+id+"&";
				//console.log(edits.innerText);
				for(var i=0;i<6;i++){
					if(i==1){
						str+="name="+edits[i].innerHTML+"&";
					}
					if(i==3){
						str+="sex="+edits[i].innerHTML+"&";
					}
					if(i==5){
						str+="age="+edits[i].innerHTML+"&";
						
					}
					
				}
					str=str.slice(0,-1);
					this.setAttribute("href","edit.php?"+str);
					console.log(str);
			}
		}
	}
	</script>
</body>
</html>