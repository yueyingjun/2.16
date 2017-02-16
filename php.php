<?php
	// mysql  通过sql命令操作数据库
	// 增    insert into 表名 （`ID`, `姓名`, `性别`, `年龄`, `地址`）value（NULL, '王六', '男', '11', '搜索'）;
    // 删    delete from
    // 改    update 表名 set 字段1=值1,set 字段1=值1,set 字段1=值1
    // 查    select 字段(*) from 表名
	$db=new mysqli("localhost","root","","student");
	// var_dump($db);
	$db->query("set names utf8");    //规定编码方式
	$result=$db->query("select * from stuinfor");
	// echo "<pre>";
	$str="<table>";
	while($row=$result->fetch_assoc()){
		$str.="<tr>";
		$str.="<td>".$row["姓名"]."</td>";
		$str.="<td>".$row["性别"]."</td>";
		$str.="<td>".$row["年龄"]."</td>";
		$str.="<td>".$row["地址"]."</td>";
		$str.="</tr>";
	}
	$str.="</table>";
	echo $str;


	if($db->affected_rows>0)
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	.aa{
		width: 500px;
		border: 1px solid #000;
		border-collapse: collapse;
	}
	.add{
		width: 498px;
		border: 1px solid #000;
		border-top: 0;
		text-align: center;
		cursor: pointer;
	}
</style>
<body>
	<table class="aa">
		<tr>
			<th>姓名</th>
			<th>性别</th>
			<th>年龄</th>
			<th>地址</th>
		</tr>
	<?php
      $db=new mysqli("localhost","root","","student");
      $db->query("set names utf8"); 
      $sql="select * from stuinfor";
      $result=$db->query($sql);
      while ($row=$result->fetch_assoc()){
    ?>
          <tr>
              <td><?php echo $row["姓名"]?></td>
              <td><?php echo $row["性别"]?></td>
              <td><?php echo $row["年龄"]?></td>
              <td>
                <a href="del.php?id=<?php echo $row['id']?>">删除</a></td>
          </tr>

    <?php
      }
      ?>
	</table>
	<a href="" class="add">+</a>
</body>
</html>