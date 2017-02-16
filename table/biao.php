<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style type="text/css">
	table{
		width: 600px;
		border: 1px solid #000;
		margin:0 auto;
		
	}
	th,td{
		height: 30px;
		border: 1px solid #000;
		border-collapse: collapse;
		text-align: center;
		line-height: 30px;
	}
	.add{
		width: 598px;
		display: block;
		border: 1px solid #000;
		border-top: 0;
		margin: 0 auto;
		text-align: center;
		line-height: 30px;
		height: 30px;
		text-decoration: none;
	}
</style>
<body>
	<table border="" cellspacing="0" cellpadding="0">
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>操作</th>		
		</tr>
		<?php
			include "again.php";
			$sql="select * from stu";
			$result=$db->query($sql);
			while($row=$result->fetch_assoc()){
		?>
       <tr>
           <td class="name"><?php echo $row["name"]?></td>
           <td class="age"><?php echo $row["age"]?></td>
           <td class="sex"><?php echo $row["sex"]?></td>
           <td class="edit"><a href="del.php?id=<?php echo $row['id']?>">删除</a>
           <a class="bianji" href="update.php?id=<?php echo $row['id']?>">编辑</a></td>
       </tr>
       <?php
        }
      ?>

	</table>
	<a href="add.php" class="add">+</a>
	<script>
		var table=document.getElementsByTagName("table")[0];
		table.onclick=function(e){
			var ev=e||window.event;
			var obj=ev.target||ev.srcElement;
			var aa=1;
			if(obj.className=="bianji"){
				e.preventDefault();
				switch(aa){
					case 1:
						aa=2;
						obj.innerHTML="确定";
						break;
					case 2:
						aa=1;
						obj.innerHTML="编辑";
						break;
				}
			}
			console.log(aa);
		}
	</script>
</body>
</html>