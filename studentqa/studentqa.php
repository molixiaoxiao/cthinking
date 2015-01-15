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
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>学生答疑</title>
		<link href="../style.css" rel="stylesheet" type="text/css" />
		<link href="../css/studentqa.css" rel="stylesheet" type="text/css">
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../css/lrtk.css" />
		<link href="../css/cupertino/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery.imgbox.pack.js"></script>
		<script type="text/javascript" src="../js/works.js"></script>
		<script type="text/javascript" src="../js/login.js"></script>
		<script type="text/javascript" src="../js/demo.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.8.18.custom.min.js"></script>
		<script type="text/javascript" src="../js/login_chceck.js"></script>

		<style type = "text/css">     
		a{color:black;text-decoration:none;}
		a.welcome:hover{color:yellow;text-decoration: none;}
		a.logoutspan:hover{color:yellow;text-decoration: none;}
		a.loginspan:hover{color:yellow;text-decoration: none;} 
		a.register:hover{color:yellow;text-decoration: none;}
		a.forgetpwd:hover{color:yellow;text-decoration: none;}    
		</style>

	</head>
	<body>
		<div id="outside">
		    <div class="box">
		        <div class="top" id="top">
				    <div class="ueser_loginout">
						<span class="wel"><a class="welcome">Hi, 欢迎您！</a>	
						<?php 
							if($in){
								echo $username;
						?>
						</span>
						<span title="退出" class="logoutspan">退出</span> 
						<?php
						}else {
							?>
							<span title="登录" class="loginspan" >登录</span>   <a color="black">|</a>
							<a class="register" href="../register/register.php" target="_blank" title="注册">注册</a>
							<a class="forgetpwd" href="../php/forgetpassword.php" target="_blank" title="忘记密码">&nbsp;&nbsp;&nbsp;&nbsp;忘记密码</a>	
							<?php 
						}
						?>	
				    </div>
		      	</div>
				<div class="content">
			    	<div class="div_height" >
						<div class="div-head">
							<p class="discuss">综合讨论区</p>
						</div>

						<div class="div-list">
							<a href="posting.php" class="btn_post"><button type="button" class="btn btn-primary">我要发帖</button></a>			
							
						</div>
					
							<table class="table table-bordered " >
								<tr>
									<th width="6%">序号</th>
									<th>标题</th>
									<th width="16%">作者</th>
									<th width="6%">回复数</th>
								</tr>
							
						<?php
							//显示所有已上传的文件列表
							include "../sqlclass/sqlclass.php";
							$mysql = new mySql();
							
							$pageSize = 10;
							if(!isset($_GET['pageNumber']))
							{
								$pageNumber = 1;
							}
							else
							{
								$pageNumber = $_GET['pageNumber'];
							}

							$sqlCount = "select count(*) from tb_alltitle";
							$resCount = mysql_fetch_row(mysql_query($sqlCount));
							$totalCount = $resCount[0];

							$allPageNum = ($totalCount - $totalCount % $pageSize) / $pageSize;
							if($totalCount % $pageSize != 0)
							{
								$allPageNum ++;
							}
							//echo $allPageNum;
							$startPage = 1;
							$endPage = 10;
							if($pageNumber > 5)
							{
								$startPage = $pageNumber - 5;
								$endPage = $startPage + 9;
							}
							if($endPage > $allPageNum)
							{
								$endPage = $allPageNum;
							}

							echo "<div class=\"pageTop\">";
							if($pageNumber == 1)
							{
								echo "<a class=\"firstPage\">第一页</a>";
							}
							else
							{
								echo "<a class=\"prePage\" href='studentqa.php?pageNumber=".($pageNumber-1)."'>上一页</a>";
							}
							for ($i=$startPage; $i <= $endPage; $i++)
							{
								if($i != $pageNumber)
								{
									echo "<a class=\"num\" href='studentqa.php?pageNumber=".$i."'>".$i."</a>";
								}
								else
								{
									echo "<a class=\"currentPage\">".$i."</a>";
								}
							}
							if($pageNumber == $allPageNum)
							{
								echo "<a class=\"lastPage\">末页</a>";
							}
							else
							{
								echo "<a class=\"nextPage\" href='studentqa.php?pageNumber=".($pageNumber+1)."'>下一页</a>";
							}
							echo "</div>";

							$exec = "select * from tb_alltitle limit ".(($pageNumber-1) * $pageSize).",".$pageSize;
							$mysql->query($exec);
							$resInfo = $mysql->getnext();
							if($resInfo=='0')
							{
								exit(0);
							}

							$exec = "select createtime from tb_posting where title_id='".$resInfo->title_id."'";
							$mysql_1 = new mySql();
							$mysql_1->query($exec);
							$resCreatetime = $mysql_1->getnext();

							while ($resInfo != '0') {
								
								echo "<tr>
										<td>".$resInfo->title_id."</td>
										<td><a class=\"title-id\" href=\"postInfo.php?title_id=".$resInfo->title_id."\">".$resInfo->title."</a></td>
										<td>".$resInfo->nickname."</br><div class=\"createtime\">".
											$resCreatetime->createtime."</div></td>
										<td>".$resInfo->post_num."</td>
									  </tr>";

								$resInfo = $mysql->getnext();
							}
							
							
							$mysql->close();
							// $mysql_1->close();
						?>
						
					</table>
						</div>
					</div>
					<div class="shadow">
					</div>
					<div class="bottom"><h5>版权所有  2011  计算与网络中心  保留所有权利。</h5>
						<div id="divTotalizer" name="divTotalizer">
						</div>
					</div>
		    	</div>
			    <div class="content_shadow">
			    </div>
			</div>	
		</div>
	</body>
</html>

 