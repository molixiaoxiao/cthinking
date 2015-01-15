$(document).ready(function(){
  	//学院和专业的下拉框,不能有空格
	var majorChange= eval("("+'{"JJ":[{"name":"经济学"},{"name":"国际经济与贸易"},{"name":"金融学"},{"name":"金融工程"},{"name":"国际商务"},{"name":"统计学"}],"SH":[{"name":"社会学"},{"name":"社会工作"}],"RW":[{"name":"哲学"},{"name":"汉语言文学"},{"name":"对外汉语"}],"GG":[{"name":"政治学与行政学"},{"name":"*公共事业管理"}],"FX":[{"name":"法学"}],"WY":[{"name":"英语"},{"name":"日语"},{"name":"德语"},{"name":"翻译"}],"XW":[{"name":"新闻学"},{"name":"广播电视新闻学"},{"name":"广告学"},{"name":"传播学"},{"name":"播音与主持艺术"}],"XW":[{"name":"新闻学"},{"name":"广播电视新闻学"},{"name":"广告学"},{"name":"传播学"},{"name":"播音与主持艺术"}],"SX":[{"name":"数学与应用数学"},{"name":"信息与计算科学"},{"name":"*统计学"}],"WL":[{"name":"物理学"},{"name":"应用物理学"}],"HX":[{"name":"应用化学"},{"name":"化学工程与工艺"},{"name":"*光电子材料与器件"}],"SK":[{"name":"生物技术"},{"name":"生物医学工程"},{"name":"生物信息技术"},{"name":"生物科学"},{"name":"*生物制药"}],"JX":[{"name":"机械设计制造及其自动化"},{"name":"*测控技术与仪器"},{"name":"工业设计"},{"name":"工业工程"}],"CL":[{"name":"材料科学与工程"},{"name":"材料成型及控制工程"},{"name":"电子封装技术"},{"name":"功能材料"}],"NY":[{"name":"热能与动力工程"},{"name":"核工程与核技术"},{"name":"新能源科学与技术"}],"DQ":[{"name":"电气工程及其自动化"}],"SD":[{"name":"水利水电工程"}],"JSJ":[{"name":"计算机科学与技术"},{"name":"信息安全"}],"GD":[{"name":"光信息科学与技术"},{"name":"光电信息工程"},{"name":"*光电子材料与器件"}],"KZ":[{"name":"测控技术与仪器"},{"name":"自动化"},{"name":"物流管理"},{"name":"物联网工程"}],"DX":[{"name":"电子信息工程"},{"name":"通信工程"}],"DJ":[{"name":"电子科学与技术"},{"name":"集成电路设计与集成系统"}],"RJ":[{"name":"软件工程"},{"name":"数字媒体技术"}],"JZ":[{"name":"艺术设计"},{"name":"建筑学"},{"name":"城市规划"},{"name":"景观学"}],"HJ":[{"name":"建筑环境与设备工程"},{"name":"给排水科学与工程"},{"name":"环境工程"}],"TM":[{"name":"土木工程"},{"name":"工程力学"},{"name":"工程管理"},{"name":"道路桥梁与渡河工程"},{"name":"交通运输"},{"name":"交通工程"}],"CH":[{"name":"船舶与海洋工程"},{"name":"轮机工程"}],"GL":[{"name":"财政学"},{"name":"信息管理与信息系统"},{"name":"工商管理"},{"name":"市场营销"},{"name":"会计学"},{"name":"财务管理"},{"name":"物流管理"}],"GW":[{"name":"预防医学"}],"LC":[{"name":"医学教育"},{"name":"临床医学"},{"name":"中医学"},{"name":"医学影像学"},{"name":"口腔医学"},{"name":"医学检验"},{"name":"中西医临床医学"}],"JY":[{"name":"生物制药"}],"FY":[{"name":"法医学"}],"HL":[{"name":"护理学"}],"YX":[{"name":"药学"},{"name":"中药学"}],"YW":[{"name":"公共事业管理"},{"name":"信息管理与信息系统"}]}'+")");
		$('#department').change(function(){
    for(var i in majorChange){
        if(i==this.value){
           var major_obj = $('#major')[0];
           major_obj.innerHTML='';
           var obj = majorChange[i];
           for(var k in obj){
              if(obj[k].name){             
			  	major_obj.options[major_obj.options.length] = new Option( obj[k].name);
              }
           }
           break;
        }
    }
	var depText="经济学院";
	 depText=$("#department").find("option:selected").text();
	$("#depVal").val(depText);
	//避免所选项为第一个时未改变下拉框内容而无法读取数据
	var majText=$("#major").find("option:selected").text();
	$("#majVal").val(majText);
	
 });

 $("#major").change(function(){
 var majText=$("#major").find("option:selected").text();
	$("#majVal").val(majText);
	});
	
//genarate checkcode
$("#s_new_code").click(function(){
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
		$("#s_picsrc").attr("src",'getcode.php?num='+num);
		$("#s_txt_code").val(num);
		
});
/*自定义规则*/
//验证学号
jQuery.validator.addMethod(
		"sIDFomatChk",function(value,element){
			var patrn= /^([a-z]|[A-Z]){0,1}[0-9]{6,9}$/; 
return this.optional(element)||(patrn.test(value)); 
		},'正确格式：6~9位数字或者一个字母开头的学号'
	);
//验证昵称
jQuery.validator.addMethod(
		"nicknameForChk",function(value,element){
			var patrn= /^[A-Za-z0-9]{6,12}$/; 
return this.optional(element)||(patrn.test(value)); 
		},'6-12位数字或英文，区分大小写'
	);
	$("#s_form").validate({
		rules:{
			department:{
				required:true
			},
			major:{
				required:true
			},
			class:{
				required:true,
				rangelength:[4,4],
				number:true
			},
			s_truename:{
				required:true
			},
		
			s_userID:{
				required:true,
				sIDFomatChk:true,
				remote:"remotes/sIDchk.php"//验证用户名是否被用
			},
		
			s_nickname:{
				required:true,
				nicknameForChk:true,
				remote:"remotes/snicnamechk.php"
			},
		
			s_email:{
				required:true,
				email:true,
				remote:"remotes/semailchk.php"
			},
		
			s_password:{
				required:true,
				minlength:6
			},
			
			s_pwd_confirm:{
				required: true,
				minlength: 6,
				equalTo: "#s_password"
			},
		
			s_checkcode:{
				required: true,
				minlength:4,
				equalTo: "#s_txt_code"
			},
		
			
		},
		
	messages: { 
	    department:{
		required:"请选择学院"
		},  
		 major:{
		required:"请选择专业"
		},  
		class:{
		required:"请输入您的班级",
		rangelength:"请输入类似格式：12**",
		number:"请输入类似格式：12**",
		},  
	   	s_truename: { 
		required: "请输入您的真实姓名",  
		},
	
		s_userID: { 
		required: "请输入您的账号",
		minlength: jQuery.format("账号不能小于6位"),
		remote:  "此学号已存在！"
		}, 
	
		s_nickname: { 
		required: "请输入您的昵称",	
		remote: jQuery.format("{0}已存在！请换一个")
		},
	
		s_email: { 
		required: "请输入Email地址", 
		email: "请输入正确的email地址" ,
		remote:"此邮箱已被注册！请换一个"	
		},	
		
		s_password: { 
		required: "请输入密码", 
		minlength: jQuery.format("密码不能小于6位") 
		}, 
	
		s_pwd_confirm: { 
		required: "请输入确认密码", 
		minlength: "确认密码不能小于6位", 
		equalTo: "两次输入密码不一致" 
		},
	
		s_checkcode:{
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
