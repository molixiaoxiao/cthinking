$(document).ready(function(){
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
	var checkText=$("#department").find("option:selected").text();
	$("h1").text(checkText);
	
 });
 $("#major").change(function(){
 var checkmText=$("#major").find("option:selected").text();
	$("h2").text(checkmText);
	});

	$(".sSignupForm").validate({
		rules:{
			truename:{
				required:true
			},
				userID:{
				required:true,
				maxlength:12
			},
			nickname:{
				required:true,
				rangelength: [6, 12] 
		},
			email:{
				required:true,
				email:true
			},
			password:{
				required:true,
				minlength:6
			},
			pwd_confirm:{
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
			/*captcha:{
			required:true
			},	*/	

		},
		
	messages: { 
		truename: "请输入姓名",
		truename: { 
		required: "请输入您的真实姓名",  
		},  
		userID: { 
		required: "请输入您的账号",
		minlength: jQuery.format("账号不能小于6位")  
		}, 
		nickname: { 
		required: "请输入您的昵称",
		rangelength: "请输入6-12位的昵称"
		}, 
		email: { 
		required: "请输入Email地址", 
		email: "请输入正确的email地址" 
		},	
		password: { 
		required: "请输入密码", 
		minlength: jQuery.format("密码不能小于6位") 
		}, 
		pwd_confirm: { 
		required: "请输入确认密码", 
		minlength: "确认密码不能小于6位", 
		equalTo: "两次输入密码不一致" 
		},
		/*captcha: { 
		required: "请输入验证码", 
		minlength: "验证码不能小于5个字符", 
		}*/
		},
	errorPlacement: function(error, element) {
			error.appendTo( element.parent().next().empty() );
		},
		
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("checked");
		}
		
	});
});