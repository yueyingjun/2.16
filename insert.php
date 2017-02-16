<?php
header("Content-Type:text/html;charset=utf8");
    /**
     * 编码，显示文字的规则
     * utf-8 万国码
     * utf8_general_ci
     * 数据库新建表时，名字处设置一个id，索引PRIMARY,AI自增的意思，下面打勾。
     *
     * 增 删 改 查
     * $row 每一行信息
     * */
$sq=new mysqli("localhost","root","","test");
//	echo "<pre>";  原样输出
//	$sq->query 发送数据库语言
$sq->query("set names utf8");
//数据库输出编码 与数据库编码要保持一致.UTF-8 国际标准编码.
$result=$sq->query("select * from study");   //定义查询语句
//	$result->fetch_assov()   一行一行取信息
$str="<table>";
while($row=$result->fetch_assoc()){
    $str.="<tr>";
    $str.="<td>".$row["name"]."</td>";
    $str.="<td>".$row["age"]."</td>";
    $str.="<td>".$row["sex"]."</td>";
    $str.="</tr>";
};
$str.="</table>";
echo $str;




?>