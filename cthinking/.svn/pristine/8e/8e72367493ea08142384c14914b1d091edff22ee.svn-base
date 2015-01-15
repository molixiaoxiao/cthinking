<?php
//管理已上传的文件，即对它们进行删除
	include "../sqlclass/sqlclass.php";
	$mysql = new mySql();
	$sql = "delete from upload_file where new_name='".$_GET["id"]."'";
	//echo $sql;
	$mysql->delete($sql);
	$mysql->close();

	$delete_file = $_GET["id"];
	unlink($delete_file);

	echo "<script language=\"JavaScript\">\r\n"; 
	echo " alert(\"删除成功！\");\r\n"; 
	echo " history.back();\r\n"; 
	echo "</script>"; 
	exit;
?>