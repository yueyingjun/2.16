<?php
 $stu=new mysqli("localhost","root","","weihaichun");//连接数据库
 $stu->query("set names utf8");
 $stu->query("insert into student (姓名,性别,年龄,学号) values ('','','','')");
?>