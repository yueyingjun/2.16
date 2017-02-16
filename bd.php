<?php
$db=new mysqli("localhost","root","","lianxi");//连接数据库
$db->query("set names utf8");//执行数据库语言
$result=$db->query("select * from hu");
?>