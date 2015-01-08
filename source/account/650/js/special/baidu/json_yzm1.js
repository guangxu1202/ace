
$(document).ready(function(a) {
	$("#dosubmit_code5").click(function() {
		var yourname = $("#yourname").val();
		var yournumber = $("#yournumber").val();
		var code = $("#code").val();
		var urlfrom = $("#urlfrom").val();
		var urlpage = $("#urlpage").val();
		var pdtype = $("#pdtype").val();
		var d = /^[1][358]\d{9}$/;
        if (yourname != "" && d.test(yournumber) && yournumber != "" && yourname !=" ") {
            $.ajax({
                type: "POST",
                dataType: "json",
                url:"/index.php?s=/Home/Verify/data",
                data:"yourname="+yourname+"&yournumber="+yournumber+"&code="+code+"&urlfrom="+urlfrom+"&urlpage="+urlpage+"&pdtype="+pdtype,
                success: function(msg){
                    if(msg==1){
                        window.location.href="/tips.html";
                    }else if(msg==2){
                        alert('请输入正确的手机号码');
                    }else if(msg==3){
                        alert('请正确输入验证码');
                    }else if(msg==5){
                        alert('申请失败，请联系网站客服人员或者工作人员');
                    }else if(msg==6){
                        alert('你已经提交过呢，不需要重复提交');
                    }else{
                        alert('提交失败，请联系网站客服人员或者工作人员');
                    }
                    return;
                }
            });
        }else{
            alert('请完善信息,或者检测手机号码是否正确')
        }

    });

	$("#dosubmit_code4").click(function() {
		var yourname = '';
		var yournumber = $("#yournumber1").val();
		var code = $("#code1").val();
		var urlfrom = $("#urlfrom1").val();
		var urlpage = $("#urlpage1").val();
		var pdtype = $("#pdtype1").val();
		var d = /^[1][358]\d{9}$/;
        if (d.test(yournumber) && yournumber != "") {
            $.ajax({
                type: "POST",
                dataType: "json",
                url:"/index.php?s=/Home/Verify/data",
                data:"yourname="+yourname+"&yournumber="+yournumber+"&code="+code+"&urlfrom="+urlfrom+"&urlpage="+urlpage+"&pdtype="+pdtype,
                success: function(msg){
                    if(msg==1){
                        window.location.href="/tips.html";
                    }else if(msg==2){
                        alert('请输入正确的手机号码');
                    }else if(msg==3){
                        alert('请正确输入验证码');
                    }else if(msg==5){
                        alert('申请失败，请联系网站客服人员或者工作人员');
                    }else if(msg==0){
                        alert('请输入完整信息');
                    }else{
                        alert('提交失败，请联系网站客服人员或者工作人员');
                    }
                    return;
                }
            });
        }else{
            alert('请检测手机号码是否正确')
        }

    });
	
	$("#dosubmit_code2").click(function() {
		var yourname = '';
		var yournumber = $("#yournumber2").val();
		var code = $("#code2").val();
		var urlfrom = $("#urlfrom2").val();
		var urlpage = $("#urlpage2").val();
		var pdtype = $("#pdtype2").val();
		var d = /^[1][358]\d{9}$/;
        if (d.test(yournumber) && yournumber != "") {
            $.ajax({
                type: "POST",
                dataType: "json",
                url:"/index.php?s=/Home/Verify/data",
                data:"yourname="+yourname+"&yournumber="+yournumber+"&code="+code+"&urlfrom="+urlfrom+"&urlpage="+urlpage+"&pdtype="+pdtype,
                success: function(msg){
                    if(msg==1){
                        window.location.href="/tips.html";
                    }else if(msg==2){
                        alert('请输入正确的手机号码');
                    }else if(msg==3){
                        alert('请正确输入验证码');
                    }else if(msg==5){
                        alert('申请失败，请联系网站客服人员或者工作人员');
                    }else if(msg==0){
                        alert('请输入完整信息');
                    }else{
                        alert('提交失败，请联系网站客服人员或者工作人员');
                    }
                    return;
                }
            });
        }else{
            alert('请检测手机号码是否正确')
        }
    });

	$("#dosubmit_code3").click(function() {
		var yourname = $("#yourname3").val();
		var yournumber = $("#yournumber3").val();
		var code = $("#code3").val();
		var urlfrom = $("#urlfrom3").val();
		var urlpage = $("#urlpage3").val();
		var pdtype = $("#pdtype3").val();
		var d = /^[1][358]\d{9}$/;
        if (yourname != "" && d.test(yournumber) && yournumber != "" && yourname !="-请输入您的姓名-") {
            $.ajax({
                type: "POST",
                dataType: "json",
                url:"/index.php?s=/Home/Verify/data",
                data:"yourname="+yourname+"&yournumber="+yournumber+"&code="+code+"&urlfrom="+urlfrom+"&urlpage="+urlpage+"&pdtype="+pdtype,
                success: function(msg){
                    if(msg==1){
                        window.location.href="/tips.html";
                    }else if(msg==2){
                        alert('请输入正确的手机号码');
                    }else if(msg==3){
                        alert('请正确输入验证码');
                    }else if(msg==5){
                        alert('申请失败，请联系网站客服人员或者工作人员');
                    }else if(msg==6){
                        alert('你已经提交过呢，不需要重复提交');
                    }else{
                        alert('提交失败，请联系网站客服人员或者工作人员');
                    }
                }
            });
        }else{
            alert('请完善信息,或者检测手机号码是否正确')
        }

    });

});


