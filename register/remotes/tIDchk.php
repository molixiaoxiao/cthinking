<?php
include "../../sqlclass/sqlclass.php";
$valid = 'true';//no such record

$t_userID = $_REQUEST['t_userID'];		
$mysql = new mySql();	//新建数据库类
	
$sql = "select * from tb_tinfo where userID = '$t_userID'";
$num =  $mysql->getRowsNum($sql);
	if($num==1){
		$valid = 'false';
	}
$mysql->close();
echo $valid;
?>
