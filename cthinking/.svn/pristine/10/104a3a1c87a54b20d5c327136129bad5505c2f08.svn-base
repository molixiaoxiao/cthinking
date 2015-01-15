$(document).ready(function(){
  	//genarate checkcode
$("#t_new_code").click(function(){
		num = '';
		for(i=0;i<4;i++){
			tmp =  Math.ceil((Math.random() * 15));
			switch(tmp){
				case(10):
					num += 'a';
					break;
				case(11):
					num += 'b';
					break;
				case(12):
					num += 'c';
					break;
				case(13):
					num += 'd';
					break;
				case(14):
					num += 'e';
					break;
				case(15):
					num += 'f';
					break;
				default:
					num += tmp;
					break;
			}
		}
		$("#t_picsrc").attr("src",'getcode.php?num='+num);
		$("#t_txt_code").val(num);
});
/*自定义规则*/
//验证昵称
jQuery.validator.addMethod(
		"nicknameForChk",function(value,element){
			var patrn= /^[A-Za-z0-9]{6,12}$/; 
return this.optional(element)||(patrn.test(value)); 
		},'6-12位数字或英文，区分大小写'
	);
	$("#t_form").validate({
		rules:{
			t_truename:{
				required:true
			},
			
			t_userID:{
				required:true,
				nicknameForChk:true,
				remote:"remotes/tIDchk.php"
			},
			
			t_nickname:{
				required:true,
				nicknameForChk:true,
				remote:"remotes/tnicnamechk.php"
			},
			
			t_email:{
				required:true,
				email:true,
				remote:"remotes/temailchk.php"
			},
			
			t_password:{
				required:true,
				minlength:6
			},
			
			t_pwd_confirm:{
				required: true,
				minlength: 6,
				equalTo: "#t_password"
			},
			
			t_checkcode:{
				required: true,
				minlength:4,
				equalTo: "#t_txt_code"
			},
			
		},
		
	messages: { 
	   
		t_truename: { 
		required: "请输入您的真实姓名",  
		},
		
		t_userID: { 
		required: "请输入您的账号",
		minlength: jQuery.format("账号不能小于6位"),
		remote:  "此账号已存在！请换一个"
		}, 
		
		t_nickname: { 
		required: "请输入您的昵称",	
		remote: jQuery.format("{0}已存在！请换一个")
		},
		
		t_email: { 
		required: "请输入Email地址", 
		email: "请输入正确的email地址" ,
		remote:"此邮箱已被注册！请换一个"	
		},	
		
		t_password: { 
		required: "请输入密码", 
		minlength: jQuery.format("密码不能小于6位") 
		}, 
		
		t_pwd_confirm: { 
		required: "请输入确认密码", 
		minlength: "确认密码不能小于6位", 
		equalTo: "两次输入密码不一致" 
		},
		
		t_checkcode:{
				required: "请输入验证码", 
				minlength:"验证码为4位",
				equalTo: "验证码不正确！"
			},	
		},
	errorPlacement: function(error, element) {
			error.appendTo( element.parent().next().empty());
		},
		
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").removeClass("error").addClass("checked");//removeClsaa() 是为了防止同时添加error和success属性
			
		}
		
	});	
});
