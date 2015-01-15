//生成XMLHttpRequest对象，为了和服务器端进行交互
var xmlhttp;
if(window.XMLHttpRequest){
	xmlhttp = new XMLHttpRequest();
}else{
	xmlhttp = new ActiveXObject("Microsoft.XMLHttp");
}

function keyLogin(){
  if (event.keyCode==13)   //回车键的键值为13
     document.getElementById("loginbtn").click();  //调用登录按钮的登录事件
}

$(document).ready(function(){
	$(".loginspan").click(function(){
		//alert("clicked");		
		//$(".messagebox").slideDown("normal");
		$(".messagebox").css("display","block");
		$(".username").focus();
	});
	
	$(".logoutspan").click(function(){
		window.location.href='./php/logout.php';
	
	});
	
	$(".closeBtn").click(function(){
		//alert("clicked");
		$(".messagebox").css("display","none");
	});
	
	$("#loginbtn").click(function(){
		//alert("ok");
		var username = $(".username").val();
		var password = $(".userpass").val();
		
		/* if(username == ""){
			$("#usererr").html("<span style='color:red'>用户名不为空</span>");
		}else{
			$("#usererr").html("<span>　</span>");
		} */
		
		var url = "./php/checklogin.php?username="+username+"&password="+password;//通过URL传递参数
	
		//设置和服务器端交互的相应参数，
		xmlhttp.open('GET',url,true);//true,表示异步
		
		//注册回调方法，当服务器端返回数据后，可以执行回调方法
		xmlhttp.onreadystatechange = function(){
			//写回调方法，判断服务器端的交互是否完成，还要判断服务器端是否正确返回了数据
			if(xmlhttp.readyState ==4 && xmlhttp.status == 200){
				msg = xmlhttp.responseText;
				if(msg == '0'){
					document.getElementById('passerr').innerHTML="<span style='color:red'>用户不存在!</span>";
				}else if(msg == '2'){
					document.getElementById('passerr').innerHTML="<span style='color:red'>用户名或密码错误!</span>";
				}else if(msg == '1'){
					document.getElementById('passerr').innerHTML="<span style='color:red'></span>";
					window.location.href='index.php';
				}else{
					document.getElementById('passerr').innerHTML="<span style='color:red'>unknown error!</span>";
				}	
			}
		}	
		//设置向服务器发送的数据，启动和服务器的交互，
		//这里使用的是GET方式，请求数据位于URL链接里面，参数直接设为NULL
		xmlhttp.send();	
	});
	
/* 	$(".usernamediv").keyup(function(){
		var value = $(".usernamediv").val();
		if (value == "") {
			//让边框变成红色，并且带背景图
			$(".username").addClass("userText");
		} else {
			//去掉边框和背景图
			$(".username").removeClass("userText");			
		}
	});
 */
 
 
})

