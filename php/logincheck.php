<?php
	session_start();	//开启session
	$_SESSION['loginID'] = "";
	$_SESSION['in'] = false;
	$_SESSION['nickname'] = "";

	include "../sqlclass/sqlclass.php";
	$mysql = new mySql();	//新建数据库类
		
	$username = strtoupper($_GET["username"]);
	$password = md5($_GET['password']);	
	$loginid = $_GET['loginid'];
	$reback = '0';
	$sql = "";
	
	if($loginid=="-1"){
		$sql = "select userID,password from `tb_adminfo` where userID='".$username."'";
	}else if($loginid=="0"){ 
		$sql = "select userID,password,nickname from `tb_sinfo` where userID='".$username."'";
	}else if($loginid=="1"){
		$sql = "select userID,password,nickname,approve from `tb_tinfo` where userID='".$username."'";
	}
	else
	{
		exit;
	}

	$mysql->query($sql);
	$result = $mysql->getnext();
	$mysql->close();

	if($result == '0'){
		$reback = '0';	//没有该用户
	}
	else if($result->password == $password){
		$reback = '1';	//密码正确
		if($loginid == '1')
		{
			if($result->approve == '0')
			{
				$reback = '3';	//教师账号审核未通过
				echo $reback;
				exit;
			}
		}
	}else{
		$reback = '2';	//密码错误
	}	
	
	if($reback == '1'){
		$_SESSION['in'] = true;
		$_SESSION['nickname'] = $result->nickname;
		$_SESSION['loginID'] = $loginid;
	}
	
	echo $reback;
?>