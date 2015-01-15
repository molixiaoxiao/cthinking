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
	mysql_query("set names 'utf8'"); //使用utf8编码;解决中文乱码问题
	
	$sql = "select userID from tb_tinfo where nickname='$username'";
	$mysql->query($sql);
	$res = $mysql->getnext();
	$userID = $res->userID;
	//echo "<script>{alert('$userID');}</script>";

	if($_POST['submit']){	
		$sql = "select * from t_questionare_tb where tno='".$userID."'";
		//echo $sql;
		$mysql->query($sql);
		$result = $mysql->getnext();

		if($result == '0'){	
		$vote724e=$_POST['vote724e'];
		$vote730e=$_POST['vote730e'];
		
		$vote724=implode(",",$vote724e);
		$vote730=implode(",",$vote730e);
		$sql = "insert into t_questionare_tb(ID,tno,Q1,Q2,Q3,TEXT3,Q4,Q5,Q6,TEXT6,Q7,Q8,Q9,TEXT9,Q10,Q11,TEXT11,Q12,TEXT12,Q13,date)".
		"values('','$userID','$_POST[vote719]','$_POST[vote720]','$_POST[vote721]','$_POST[text721]','$_POST[vote722]','$_POST[vote723]','$vote724','$_POST[text724]','$_POST[text725]','$_POST[vote726]','$_POST[vote727]','$_POST[text727]','$_POST[vote728]','$_POST[vote729]','$_POST[text729]','$vote730','$_POST[text730]','$_POST[text731]',now())";
		echo $sql;
		$mysql->query($sql);
		echo "<script>{alert('感谢填写！');}</script>";
		}else{
			echo "<script>{alert('您已提交过，请勿重复填写！');}</script>";
		}
		$mysql->close();
	} 
	
	echo "<script>location.href='t_questionare_result.php';</script>";
?>