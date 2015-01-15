<?php
include "../../sqlclass/sqlclass.php";
$valid = 'true';//no such record

$userID =strtoupper($_REQUEST['s_userID']);		
$mysql = new mySql();	//新建数据库类
	
$sql = "select * from tb_sinfo where userID = '$userID'";
$num =  $mysql->getRowsNum($sql);
	if($num==1){
		$valid = 'false';
	}
$mysql->close();
echo $valid;
?>
