<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	table{
		width: 400px;
		margin:0 auto;
		border:1px solid #000;
		border-collapse: collapse;
	}
	th,td{
		border:1px solid #000;
		text-align: center;
	}
	.jia{
		height:30px;
		width: 398px;
		background: red;
		border:1px solid #000;
		display: block;
		border-top: none;
		text-align: center;
		line-height: 30px;
		margin:0 auto;
		text-decoration: none;
	}
</style>
<body>
	<table>
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>住址</th>
		</tr>
<?php
	header("Content-Type:text/html;charset=UTF-8");
	include "1.php";
	$dp= new mysqli("localhost","root","","xiaozan");
	// var_dump($dp);
	$dp->query("set names utf8");//执行数据库语言
	$result=$dp->query("select * from guanlixitong");
	echo "<pre>";//原样输出
	$str="<table border='1'>";
	while($row=$result->fetch_assoc()){//查询每行的数据，也就是循环
		$str.="<tr>";
			$str.="<td>".$row["name"]."</td>";
			$str.="<td>".$row["age"]."</td>";
			$str.="<td>".$row["sex"]."</td>";
			$str.="<td>".$row["home"]."</td>";
		$str.="</tr>";
	};
	$str.="</table>";
	echo $str;
	
?>
	</table>
	<a href="" class="jia">增加</a>
</body>
</html>

