
<?php
	error_reporting(E_ERROR);  
	ini_set("display_errors","Off");  
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

<style type="text/css">
.div_height{clear: both;width: 1000px;min-height:600px;background-color: #0000;}
</style>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>学生答疑</title>
		<link href="../style.css" rel="stylesheet" type="text/css" />
		<link href="../css/studentqa.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../css/lrtk.css" />
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="../css/cupertino/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery.imgbox.pack.js"></script>
		<script type="text/javascript" src="../js/works.js"></script>
		<script type="text/javascript" src="../js/login.js"></script>
		<script type="text/javascript" src="../js/demo.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.8.18.custom.min.js"></script>
		<script type="text/javascript" src="../js/login_chceck.js"></script>
	    <!-- 配置文件 -->
	    <script type="text/javascript" src="../ueditor/ueditor.config.js"></script>
	    <!-- 编辑器源码文件 -->
	    <script type="text/javascript" src="../ueditor/ueditor.all.js"></script>

		<style type = "text/css">     
		a{color:black;text-decoration:none;}
		a.welcome:hover{color:yellow;text-decoration: none;}
		a.logoutspan:hover{color:yellow;text-decoration: none;}
		a.loginspan:hover{color:yellow;text-decoration: none;} 
		a.register:hover{color:yellow;text-decoration: none;}
		a.forgetpwd:hover{color:yellow;text-decoration: none;}
		.container{min-height: 300;width: 800}
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
							<span title="登录" class="loginspan">登录</span>  <a color="black">|</a>
							<a class="register" href="../register/register.php" target="_blank" title="注册">注册</a>
							<a class="forgetpwd" href="../php/forgetpassword.php" target="_blank" title="忘记密码">&nbsp;&nbsp;&nbsp;&nbsp;忘记密码</a>	
							<?php 
						}
						?>	
				    </div>
		      	</div>	
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
				?>
			    <div class="content">
			    	<div class="div_height" >
						<div class="div-head">
							<p class="discuss">综合讨论区</p>
						</div>
						<div>
						<form action="postinsert.php" method="post">
							<div>
								<div>
									<p id="question">我的问题：</p>
								</div>
								<div>
									<textarea  id="text" placeholder="请输入问题"class="form-control" rows="5" name="title" cols="90"></textarea>
								</div>		
								<div>
									<p id="content">详细说明：</p>
								</div>
								<div class="container">
<!-- 									<textarea id="text" class="form-control"placeholder="请输入对问题的说明" rows="5" name="content" cols="90"></textarea> -->
									<script id="container" name="content" type="text/plain"></script>
									<!-- 实例化编辑器 -->
								    <script type="text/javascript">
								        var ue = UE.getEditor('container');
								    </script>
								</div>
							</div>
							<div>
								<button type="submit"  id="button" class="btn btn-primary" name="submit">提交</button>
								<button type="reset" id="button" class="btn btn-primary" name="reset">重填</button>
							</div>
						</form>
					
				</div>
			    </div>
			</div>
		</div>
			</div>		
					<div class="bottom"><h5>版权所有  2011  计算与网络中心  保留所有权利。</h5>
						<div id="divTotalizer" name="divTotalizer">
						</div>
					</div>		
	</body>
</html>


