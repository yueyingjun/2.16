<?php
//	$db=new mysqli("localhost","root","","lianxi");
////	链接数据库 地址 账户 密码 操作的库
//	$db->query("set names utf8");
//	$result=$db->query("select * from stude");
//	echo "<pre>";
//	$str="<table>";
//	while($row=$result->fetch_assoc()){
////		循环的取出每一行
//		$str.="<tr>";
//			$str.="<td>".$row["姓名"]."</td>";
//			$str.="<td>".$row["年龄"]."</td>";
//		$str.="</tr>";
//	};
//	$str.="</table>";
//	echo $str;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
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
	      $sql="select * from xinxi";
	      $result=$db->query($sql);
	      while ($row=$result->fetch_assoc()){
	    ?>
		<tr>
	        <td>
	          	<?php 
	          		echo $row["name"]
	          	?>	
	        </td>
	        <td>
	          	<?php
	          		echo $row["age"]
	          	?>
	        </td>
	        <td>
	          	<?php
	          		echo $row["sex"]
	          	?>
	        </td>
	        <td>
	            <a href="del.php?id=<?php echo $row['id']?>">删除</a>
	            <a href="edit.php?id=<?php echo $row['id']?>">编辑</a>
	        </td>
	     </tr>
        <?php
      		}
      	?>
	</table>
	<a href="" class="add">+</a>
</body>
 <style>
    table{
      width:600px;margin:0 auto;
      border:1px solid #000;
      border-collapse: collapse;
    }
    td,th{
      border:1px solid #000;
    }
    .add{
      display: block;
      width:598px;border:1px solid #000;
      height:30px;
      border-top:none;text-align: center;
      line-height:30px ;margin:0 auto;
      text-decoration: none;
    }
  </style>
</html>