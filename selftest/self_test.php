<style type="text/css">
.innerframe{margin-top:35px;}
.selftest-table{border:1px solid blue;}
.selftest-title{height:25px;}
.selftest-content{height:25px;}
.fontsize{margin-top:5px; font-size:14px; height:30px; line-height:25px;margin-left:10px; margin-right:10px;}
.submitbtn{margin-top:20px; margin-left:585px; width:50px; font-size:15px;}
</style>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>自我测试</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/lrtk.css" />
<link href="../css/cupertino/jquery-ui-1.8.18.custom.css" rel="stylesheet" />

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery.imgbox.pack.js"></script>
<script type="text/javascript" src="../js/works.js"></script>
<script type="text/javascript" src="../js/login.js"></script>
<script type="text/javascript" src="../js/demo.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="../js/login_chceck.js"></script>
</head>
<body>

<div class="rightpart">
	<div class="innerframe">
	<form action="check_ans.php" method="post">
		<table border="0" width="600">
			<tr class="selftest-title">
				<th class="fontsize">题号</th>
				<th class="fontsize" width="550">内容</th>
				<th class="fontsize">对</th>
				<th class="fontsize">错</th>
			</tr>
			<?php
				include "../sqlclass/sqlclass.php";
				$mysql = new mySql();
				$sql = "select * from self_test";

				$mysql->query($sql);
				$resInfo = $mysql->getnext();
				while ($resInfo != '0') {
					echo "<tr class=\"selftest-content\">";
					echo "<td class=\"fontsize\">".$resInfo->id."、</td>";
					echo "<td class=\"fontsize\">".$resInfo->question."</td>";
					echo "<td><input type=\"radio\" name=\"No".$resInfo->id."\" value=\"1\" /></td>";
					echo "<td><input type=\"radio\" name=\"No".$resInfo->id."\" value=\"0\" /></td>";
					echo "</tr>";
					$resInfo = $mysql->getnext();
				}
				$mysql->close();
			?>
		</table>
		<input class="submitbtn" type="submit" name="submit" value="提交" />
	</form>
	</div>    
</div>
</body>
</html>