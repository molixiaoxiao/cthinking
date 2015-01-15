<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	session_start();
	$in = false;
	if(isset($_SESSION['nickname'])){
		$username= $_SESSION['nickname'];
	}else{
		$username = '';
	}
	//判断是否登录
	if(isset($_SESSION['in'])){
		$in = $_SESSION['in'];
	}
	if(isset($_SESSION['loginID']))
	{
		$loginid = $_SESSION['loginID'];
	}
	else
	{
		//echo "<script>alert(\"请登录后再提交！\");window.location.href=\"../index.php\";</script>";
		echo "<script>alert(\"请登录后再提交！\");window.history.back();</script>";
		exit;
	}

	include "../sqlclass/sqlclass.php";
	$mysql = new mySql();	//新建数据库类
	mysql_query("set names 'utf-8'"); //使用utf8编码;解决中文乱码问题
	
	$sql = "select userID,truename from tb_sinfo where nickname='$username'";
	$mysql->query($sql);
	$res = $mysql->getnext();
	$userID = $res->userID;
	$truename = $res->truename;

	if($_POST['submit']){
		$sql = "select ID from `s_questionare_tb` where sno='".$userID."'";
		$mysql->query($sql);
		$result = $mysql->getnext();
		if($result == '0'){	
			$vote721e=$_POST['vote721e'];
			$vote722e=$_POST['vote722e'];
			$vote725e=$_POST['vote725e'];
			$vote727e=$_POST['vote727e'];
			$vote732e=$_POST['vote732e'];
			$vote733e=$_POST['vote733e'];
			$vote734e=$_POST['vote734e'];
			$vote735e=$_POST['vote735e'];
			$vote737e=$_POST['vote737e'];
			
			$vote721=implode(",",$vote721e);
			$vote722=implode(",",$vote722e);
			$vote725=implode(",",$vote725e);
			$vote727=implode(",",$vote727e);
			$vote732=implode(",",$vote732e);
			$vote733=implode(",",$vote733e);
			$vote734=implode(",",$vote734e);
			$vote735=implode(",",$vote735e);
			$vote737=implode(",",$vote737e);

			$sql = "insert into s_questionare_tb(ID,sno,sname,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,TEXT13,Q14,Q15,Q16,TEXT16,Q17,Q18,Q19,Q20,Q21,DATE)".
			"values('','$userID','$truename','$_POST[vote719]','$_POST[vote720]','$vote721','$vote722','$_POST[vote723]','$_POST[vote724]','$vote725','$_POST[vote726]','$vote727','$_POST[vote728]','$_POST[vote729]','$_POST[vote730]','$_POST[vote731]','$_POST[text731]','$vote732','$vote733','$vote734','$_POST[text734]','$vote735','$_POST[vote736]','$vote737','$_POST[text726]','$_POST[text727]',now())";
			mysql_query($sql);
			echo "<script>{alert('感谢填写！');}</script>";
		}else{
			echo "<script>{alert('您已提交过，请勿重复填写！');}</script>";
		}
		$mysql->close();
	} 
	echo "<script>location.href='s_questionare_result.php';</script>";
?>