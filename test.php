<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>student</title>
</head>
<style>
	*{
		margin: 0;
		padding:0;
		list-style: none;
	}
	table{
		width: 500px;
		height: auto;
		margin: 0 auto;
		border: 1px solid #000;
        border-collapse: collapse;
	}
	tr{
		width: 100%;
	}
	td{
		width: 20%;
		height: 50px;
		line-height: 50px;
		text-align: center;
		border: 1px solid #000;
        
	}
	th{
		width: 20%;
		height: 50px;
		line-height: 50px;
		background-color: #ccc;
		border: 1px solid #000;
	}
    .tianjia{
    	width: 498px;
    	height: 30px;
    	background-color: green;
    	border: 1px solid #000;
    	border-top: none;
    	line-height: 30px;
    	font-size: 24px;
    	color: white;
    	text-align: center;
    	display: block;
    	margin: 0 auto;
    	text-decoration: none;
    }

	

</style>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>家庭住址</th>
			<th>操作</th>
		</tr>
<?php
     header("Content-Type:text/html;charset=utf8");
     include "db.php";
     $db=new mysqli("localhost","root","","student");
     $db->query("set names utf8");
     $result=$db->query("select * from information");
     while($row=$result->fetch_assoc()){
?>
     <tr id="<?php echo $row['id']?>">
           <td attr="name"><?php echo $row["name"]?></td>
           <td attr="age"><?php echo $row["age"]?></td>
           <td attr="sex"><?php echo $row["sex"]?></td>
           <td attr="home"><?php echo $row["home"]?></td>
           <td class="del"><a href="del.php?id=<?php echo $row['id']?>">删除</a></td>
       </tr>
      <?php
        }
      ?>
   </table>
   <a href="add.php" class="tianjia">+</a>
     
</body>
</html>
