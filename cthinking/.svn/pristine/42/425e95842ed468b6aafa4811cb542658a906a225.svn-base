<?php
	include "../sqlclass/sqlclass.php";
	$mysql = new mySql();
	$sql = "select * from self_test";
	$mysql->query($sql);
	$resInfo = $mysql->getnext();
	$i = 0;
	while ($resInfo != '0') {
		$id[$i] = $resInfo->id;
		//ans是题目的正确答案
		$ans[$i] = $resInfo->answer;
		$question[$i] = $resInfo->question;
		$i++;
		$resInfo = $mysql->getnext();
	}
	$mysql->close();
	for($j=0;$j<$i;$j++)
	{
		//res是用户提交的答案
		if(array_key_exists("No".($j+1),$_POST))
		{
			$res[$j] = $_POST["No".($j+1)];
			if($res[$j] == $ans[$j])
			{
				$flag[$j] = "√";
			}
			else
			{
				$flag[$j] = "×";
			}
		}
		else
		{
			$res[$j] = "-1";
			$flag[$j] = "×";
		}

	}
?>

<style type="text/css">
.correct{color: blue;}
.incorrect{color: red;}
.innerframe{margin-top:35px;}
.selftest-title{border:1px solid black; height:25px;}
.selftest-content{height:25px;}
.fontsize{margin-top:5px; font-size:14px; height:30px; line-height:25px;}
.submitbtn{margin-top:20px; margin-left:585px; width:40px; font-size:15px;}
table{border-collapse:collapse;}
table, td, th{border:1px solid black;}
th{width:30px;}
.div-question{margin-left:10px; margin-right:5px;font-size: 14px;}
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
		<form class="selftest-form">
		<table width="600">
			<tr class="selftest-title">
				<th>题号</th>
				<th>内容</th>
				<th class="fontsize" width="40" align="left">提交</th>
				<th class="fontsize" width="40" align="left">批改结果</th>
			</tr>
			<?php
				$i = 0;
				while (array_key_exists($i, $id)) {
					# code...
					echo "<tr>";
					echo "<td class=\"fontsize\" align=\"center\">".$id[$i]."</td>";
					echo "<td class=\"fontsize\"><div class=\"div-question\">".$question[$i]."</div></td>";
					if($res[$i] == 1)
					{
						echo "<td align=\"center\">T</td>";
					}
					else if($res[$i] == 0)
					{
						echo "<td align=\"center\">N</td>";
					}
					else
					{
						echo "<td align=\"center\">&nbsp;</td>";
					}
					if($flag[$i] == "√")
					{
						echo "<td class=\"correct\" align=\"center\">".$flag[$i]."</td>";
					}
					else
					{
						echo "<td class=\"incorrect\" align=\"center\">".$flag[$i]."</td>";
					}
					echo "</tr>";
					$i++;
				}
			?>
		</table>
		</form>
	</div>    
</div>
</body>
</html>