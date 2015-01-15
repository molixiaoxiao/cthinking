<?php
include "../../sqlclass/sqlclass.php";
$valid = 'true';//no such record

$nickname = $_REQUEST['t_nickname'];		
$mysql = new mySql();	//新建数据库类
	
$sql = "select * from tb_tinfo where nickname = '$nickname'";
$num =  $mysql->getRowsNum($sql);
	if($num==1){
		$valid = 'false';
	}
$mysql->close();
echo $valid;
?>
