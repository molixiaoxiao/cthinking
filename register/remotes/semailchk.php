<?php
include "../../sqlclass/sqlclass.php";
$valid = 'true';//no such record

$email = strtolower($_REQUEST['s_email']);		
$mysql = new mySql();	//新建数据库类
	
$sql = "select * from tb_sinfo where email = '$email'";
$num =  $mysql->getRowsNum($sql);
	if($num==1){
		$valid = 'false';
	}
$mysql->close();
echo $valid;
?>
