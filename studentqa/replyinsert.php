<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/studentqa.css" rel="stylesheet" type="text/css">
</head>
<body>
	
	<?php
		if(!session_id()){
			session_start();
		}
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
		if(!$in)
		{
			echo "<script>alert(\"请先登录!\");history.back();</script>";
			exit;
		}
		
		$posting_id = $_SESSION['loginID'];     //获取用户ID

		include "../sqlclass/sqlclass.php";
		$mysql = new mySql();
		if($posting_id==0)	//获取用户类型
		{
			$sql = "select * from tb_sinfo where nickname='".$username."'";
		}
		else if($posting_id==1)
		{
			$sql = "select * from tb_tinfo where nickname='".$username."'";
		}
		
		$mysql->query($sql);
		$resInfo = $mysql->getnext();
		if($resInfo == '0')
		{
			echo $sql;
		}

		$reply_nickname = $resInfo->nickname;  //获取要显示的昵称
		$reply_time = date("Y-m-j H:i:s");    //获取时间戳

		if(isset($_GET['title_id']))
		{
			$reply_title_id = $_GET['title_id'];  //获取postInfo.php页面传过来的title_id
		}
		else
		{
		 	$reply_title_id = "-1";
		 	exit(0);
		}

		if(isset($_GET['reply_id']))
		{
			$numflag = $_GET['reply_id'];  //获取postInfo.php页面传过来的title_id
		}
		else
		{
		 	$numflag = "-1";
		 	echo "<script>alert(\"numflag不能为空！\");history.back();</script>";
		 	exit;
		}

		if(isset($_POST['reply_content']))
		{
			$reply_content = $_POST['reply_content'];  //获取postInfo.php页面传过来的reply_content
			if ($reply_content == "") {
				# code...
				echo "<script>alert(\"reply_content为空！\");history.back();</script>";
		 		exit;
			}
		}
		else
		{
		 	$reply_content = "-1";
		 	echo "<script>alert(\"回复的内容不能为空！\");history.back();</script>";
		 	exit;
		}
		
		include "sql.php";
		$studentqa = new studentqa();
		if($reply_content != "-1")
		{
			$isReply = $studentqa->insertreply($reply_nickname,$reply_title_id,
				$numflag,$reply_content,$reply_time);
			if($isReply != '0')
			{
				echo "<script>alert(\"回复成功！\");window.location.href=\"postInfo.php?title_id="
					.$reply_title_id."&post_id=".$numflag."\";</script>";
			}
		}
		else
		{
			echo "<script>alert(\"回复内容不能为空！\");window.location.href=\"postInfo.php?title_id="
					.$reply_title_id."&post_id=".$numflag."\";</script>";
		}
	
		$mysql->close();
	?>
</body>
</html>