<?php
   $db=new mysqli("localhost","root","","yuelaoshi");
   $db->query("set names utf8");
   $result=$db->query("select * from stu");
   $str="<table>";
  while($row=$result->fetch_assoc()){
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