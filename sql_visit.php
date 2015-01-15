<?php 
	include "sqlclass/sqlclass.php";
	$mysql = new mySql();	//新建数据库类
	$sql = "UPDATE `tb_visitnum` SET visit_num=visit_num+1 where ID=1";
	$mysql->query($sql);
	
	$sql = "select * from `tb_visitnum` where ID=1";
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	$mysql->close();
	
	echo $row['visit_num'];
?>