
<?php

 include "db.php";

 $id=$_GET["id"];

 $db->query("delete from stu where id=".$id);

 if($db->affected_rows>0){

     echo "<script>alert('ɾ���ɹ�');location.href='1.php'</script>";

 }
location.href=url  ��ǰҳ���URLҳ��  


 
+ 	//	 mysql_affected_rows ȡ��ǰһ��MySQL������Ӱ��ļ�¼������Ӱ������ɾ�ģ��������ʧ�ܣ�����-1�� 


 
+ 	//	 mysql_num_rows()���ؽ�������е���Ŀ������ select �����Ч��������mysql_query���صĽ����ID��






?>