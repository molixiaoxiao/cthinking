<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
include "../sqlclass/sqlclass.php";
if (!isset($_POST['s_nickname'])) {
	# code...
	echo "<script>alert('信息提交失败，请重新注册！');window.location.href='register.php';</script>";
	exit;
}
$_SESSION['nickname']=$_POST['s_nickname'];
$_SESSION['in']=true;
$_SESSION['loginID'] = "0";


$department = $_POST["depVal"];
$major = $_POST["majVal"];
$userID = strtoupper($_POST["s_userID"]);
$truename = $_POST["s_truename"];
$nickname = $_POST["s_nickname"];
$email = strtolower($_POST["s_email"]);
$password = $_POST["s_password"];

$mysql = new mySql();	//新建数据库类
mysql_query("set names 'utf8'"); //使用utf8编码;解决中文乱码问题
//md5()is a one-way encryption
$sql = "insert into tb_sinfo(department,major,userID,truename,nickname,email,password)"."values('$department','$major','$userID','$truename','$nickname','$email',MD5('$password'))";

$result = $mysql->insert($sql);

$mysql->close();
 $url = "../index.php";//首页地址
?>
<html>
<head>
<meta http-equiv="refresh" content="5; url=<?php echo $url; ?>">
</head>
<body>
<h2 style="text-align:center">恭喜，注册成功！马上返回首页！</h2>
<p align="center">五秒后自动返回！</p>
</body>
</html> 