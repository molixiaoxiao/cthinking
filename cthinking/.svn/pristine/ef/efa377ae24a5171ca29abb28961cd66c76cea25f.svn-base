function checkForm(form) {
    for (var i = 0; i < form.elements.length; i++) {
        if (form.elements[i].type == "radio" || form.elements[i].type == "checkbox") {
            if (checkBox(form, form.elements[i])) {
                continue;
            }
            else {
                return false;
            }
        }
        if (form.elements[i].type == "text" && form.elements[i].name != 'Content') {
            var ids = form.elements[i].name.substr(4);
            if (document.getElementById("isdisplay_" + ids).value == "none") {
                continue;
            }
            if (form[form.elements[i].name].value.length == 0) {
                alert('请填写"' + form.elements[i].title + '"中的内容！');
                form.elements[i].focus();
                return false;
            }
        }
    }
}

function checkBox(form, opt) {
    var obj = form[opt.name];
    var names = opt.name.split("e");
    var ids = names[1];
    if (document.getElementById("isdisplay_" + ids).value == "none") {
        return true;
    }
    else {
        for (var i = 0; i < obj.length; i++) {
            if (obj[i].checked == true) return true;
        }
        alert('请选择"' + opt.title + '"中的选项！');
        opt.focus();
        return false;
    }
}


// --- newVote JS  Start -- //
function checkForm1(form) {
  
    try {
        if (checkPhone()) {
            for (var i = 0; i < form.elements.length; i++) {
                if (form.elements[i].type == "radio" || form.elements[i].type == "checkbox") {
                    if (form.elements[i].disabled || form.elements[i].style.display == "none")
                        continue;
                    if (checkBox1(form, form.elements[i])) {
                        continue;
                    }
                    else {
                        return false;
                    }
                }
                if (form.elements[i].type == "textarea") {
                    var ids = form.elements[i].name.substr(4);
                    /* if (document.getElementById("isdisplay_" + ids).value == "none") {
                        continue;
                    } */
                    if (form[form.elements[i].name].value.length == 0) {
                        alert('请填写"' + form.elements[i].title + '"中的内容！');
                        form.elements[i].focus();
                        /* var curObj = form.elements[i];
                        var pObj = curObj.parentNode.parentNode;

                        if (pObj) {
                            var votes = document.getElementById("voteLst").childNodes;
                            for (var i = 0; i < votes.length; i++) {
                                votes[i].style.display = "none";
                            }
                            pObj.style.display = "block";
                            curObj.focus();
                        } */
                        //end add
                        return false;
                    }
                }
            }
            return true;
        } else {
            alert('请输入正确联系方式!\r\n电话格式:XXXX-XXXXXXX,XXX-XXXXXXX,XXXXXXXXXXX \r\n手机格式:13XXXXXXXX,15XXXXXXXX(11位)');
            return false;
        }
    } catch (err) {
        return false;
    }
}
function checkBox1(form, opt) {
    var obj = form[opt.name];
    var names = opt.name.split("e");
    var ids = names[1];
    if (document.getElementById("isdisplay_" + ids).value == "none") {
        return true;
    }
    else {

        if (obj.checked)
            return true;
        for (var i = 0; i < obj.length; i++) {
            if (obj[i].checked == true) return true;
        }
        alert('请选择"' + opt.title + '"中的选项！');
        
        //zwf add
        //pObj = opt.parentElement.parentElement;
       
        var pObj = opt;
        while (!(pObj.parentNode.id == "voteLst")) {
            pObj = pObj.parentNode;
        }

//        debugger;
        if (pObj) {
            var pId = pObj.id.split("_")[1];
            var votes = document.getElementById("voteLst").childNodes;
            for (var i = 0; i < votes.length; i++) {
                if (votes[i].nodeType == 1) {
                    votes[i].style.display = "none";
                }
            }

            pObj.style.display = "block";
            opt.focus();
        }
        //end add
        return false;
    }
}

function checkPhone() {
    if (document.getElementById("txtPhone")) {
        var num = document.getElementById("txtPhone").value;
        var partten1 = /^(([0\+]\d{2,3}-)?(0\d{2,3})-)?(([0\+]\d{2,3})?(0\d{2,3}))?(\d{7,8})(-(\d{3,}))?$/;
        var partten2 = /^0{0,1}(13[0-9]|15[0-35-9]|18[05-9])\d{8}$/;
        var flag1 = false, flag2 = false;
        if (num != "") {
            if (partten1.test(num)) {
                flag1 = true;
            }

            if (partten2.test(num)) {
                flag2 = true;
            }

            if (flag1 || flag2) {
                return true;
            } else {
                return false;
            }
        }
    }
    return true;
}

function checkSno(){
           var temp = document.getElementById("vote716");
           //对学号的验证
           var myreg = /^([a-z]|[A-Z]){0,1}[0-9]{6,9}$/;
           if(!myreg.test(temp.value))
           {
				//document.getElementById("text716span").innerhtml="<p color="red">请输入有效的学号！(6~9位数字或者一个字母开头的学号)</p>";
                alert('请输入有效的学号！(6~9位数字或者一个字母开头的学号)');
                temp.focus();
                return false;
           }
}

function checkSname(){
           var temp = document.getElementById("vote717");   
           if(temp.value=="")
           {
                 alert('请输入您的姓名！');
                 temp.focus();
                return false;
           }
}
function checkSclass(){
           var temp = document.getElementById("vote718");
           if(temp.value=="")
           {
                 alert('请输入您的班级！');
                 temp.focus();
                return false;
           }
}