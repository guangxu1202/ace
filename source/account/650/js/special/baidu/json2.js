
$(document).ready(function(a) {
    $("#dosubmit_code").click(function() {
        var yourname = $("#yourname").val();
        var yournumber = $("#yournumber").val();
        var code = $("#code").val();
        var urlfrom = $("#urlfrom").val();
        var urlpage = $("#urlpage").val();
        var pdtype = $("#pdtype").val();
        var d = /^[1][358]\d{9}$/;

        if (yourname != "" && d.test(yournumber) && yournumber != "" && yourname!='您的真实姓名') {
            $.ajax({
                type: "POST",
                dataType: "json",
                url:"/index.php?s=/Home/Verify/data",
                data:"yourname="+yourname+"&yournumber="+yournumber+"&code="+code+"&urlfrom="+urlfrom+"&urlpage="+urlpage+"&pdtype="+pdtype,
                success: function(msg){
                    if(msg==1){
                        window.location.href="/tips.html";
                        clear();
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
        } else {
            alert('请完善信息,或者检测手机号码是否正确')
        }
    });
    $("#dosubmit_code6").click(function() {
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
                data:"yourname="+' '+"&yournumber="+yournumber+"&code="+code+"&urlfrom="+urlfrom+"&urlpage="+urlpage+"&pdtype="+pdtype,
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
            alert('请检测手机号码是否正确')
        }
    });

    $("#dosubmit").click(function() {
		var yourname = $("#yourname").val();
		var yournumber = $("#yournumber").val();
		var code = $("#code").val();
		var urlfrom = $("#urlfrom").val();
		var urlpage = $("#urlpage").val();
		var pdtype = $("#pdtype").val();
		var d = /^[1][358]\d{9}$/;
		
		if (yourname != "" && d.test(yournumber) && code != "" && yournumber != "") {
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
						alert('请输入正确验证码');
					}else if(msg==4){
						alert('验证码发送失败，请联系网站客服人员或者工作人员');
					}else if(msg==5){
						alert('申请失败，请联系网站客服人员或者工作人员');
					}else if(msg==6){
						alert('验证码，已经发送到你的手机,请查收');
					}else{
						alert('提交失败，请联系网站客服人员或者工作人员');
					}
				}
			});	
		} else {
			alert('请完善信息,或者检测手机号码是否正确')
		}
	});
	
	$("#doCode").click(function() {
		var yournumber = $("#yournumber").val();
		var d = /^[1][358]\d{9}$/;
		if (yournumber != "" && d.test(yournumber) ) {
			$.ajax({
				type: "POST",
				dataType: "json",
				url:"/verify/verify.php",
				data:"yournumber="+yournumber,
				success: function(msg){
					if(msg==1){
						alert('申请成功，稍后我们的客服人员会联系你！');
					}else if(msg==2){
						alert('请输入正确的手机号码');
					}else if(msg==3){
						alert('请输入你手机收到的正确验证码');
					}else if(msg==4){
						alert('验证码发送失败，请联系网站客服人员或者工作人员');
					}else if(msg==5){
						alert('申请失败，请联系网站客服人员或者工作人员');
					}else if(msg==6){
						alert('验证码，已经发送到你的手机,请查收');
					}else if(msg==7){
						alert('请先发送验证码,收到验证码再提交');
					}else{
						alert('提交的信息不能为空');
					}
				}
			});
			yzmclick()
		} else {
			alert('请完善信息,或者检测手机号码是否正确,或者检测是否发送过验证码')
		}
	});
	
	
	$("#dosubmit1").click(function() {
		var yourname1 = $("#yourname1").val();
		var yournumber1 = $("#yournumber1").val();
		var code1 = $("#code1").val();
		var urlfrom1 = $("#urlfrom1").val();
		var urlpage1 = $("#urlpage1").val();
		var pdtype1 = $("#pdtype1").val();
		var d1 = /^[1][358]\d{9}$/;
		
		if (yourname1 != "" && d1.test(yournumber1) && code1 != "" && yournumber1 != "") {
			$.ajax({
				type: "POST",
				dataType: "json",
				url:"/verify/verify.php",
				data:"yourname="+yourname1+"&yournumber="+yournumber1+"&code="+code1+"&urlfrom="+urlfrom1+"&urlpage="+urlpage1+"&pdtype="+pdtype1,
				success: function(msg){
					if(msg==1){
						window.location.href="tips.html";
					}else if(msg==2){
						alert('请输入正确的手机号码');
					}else if(msg==3){
						alert('请输入你手机收到的正确验证码');
					}else if(msg==4){
						alert('验证码发送失败，请联系网站客服人员或者工作人员');
					}else if(msg==5){
						alert('申请失败，请联系网站客服人员或者工作人员');
					}else if(msg==6){
						alert('验证码，已经发送到你的手机,请查收');
					}else if(msg==7){
						alert('请先发送验证码,收到验证码再提交');
					}else{
						alert('提交失败，请联系网站客服人员或者工作人员');
					}
				}
			});	
		} else {
			alert('请完善信息,或者检测手机号码是否正确')
		}
	});
	
	$("#doCode1").click(function() {
		var yournumber1 = $("#yournumber1").val();
		var d1 = /^[1][358]\d{9}$/;
		if (yournumber1 != "" && d1.test(yournumber1) ) {
			$.ajax({
				type: "POST",
				dataType: "json",
				url:"/verify/verify.php",
				data:"yournumber="+yournumber1,
				success: function(msg){
					if(msg==1){
						alert('申请成功，稍后我们的客服人员会联系你！');
					}else if(msg==2){
						alert('请输入正确的手机号码');
					}else if(msg==3){
						alert('请输入你手机收到的正确验证码');
					}else if(msg==4){
						alert('验证码发送失败，请联系网站客服人员或者工作人员');
					}else if(msg==5){
						alert('申请失败，请联系网站客服人员或者工作人员');
					}else if(msg==6){
						alert('验证码，已经发送到你的手机,请查收');
					}else if(msg==7){
						alert('请先发送验证码,收到验证码再提交');
					}else{
						alert('提交的信息不能为空');
					}
				}
			});
			yzmclick1()
		} else {
			alert('请完善信息,或者检测手机号码是否正确,或者检测是否发送过验证码')
		}
	});
	
	
	$("#dosubmit2").click(function() {
		var yourname2 = $("#yourname2").val();
		var yournumber2 = $("#yournumber2").val();
		var code2 = $("#code2").val();
		var urlfrom2 = $("#urlfrom2").val();
		var urlpage2 = $("#urlpage2").val();
		var pdtype2 = $("#pdtype2").val();
		var d2 = /^[1][358]\d{9}$/;
		
		if (yourname2 != "" && d2.test(yournumber2) && code2 != "" && yournumber2 != "") {
			$.ajax({
				type: "POST",
				dataType: "json",
				url:"/verify/verify.php",
				data:"yourname="+yourname2+"&yournumber="+yournumber2+"&code="+code2+"&urlfrom="+urlfrom2+"&urlpage="+urlpage2+"&pdtype="+pdtype2,
				success: function(msg){
					if(msg==1){
						window.location.href="tips.html";
					}else if(msg==2){
						alert('请输入正确的手机号码');
					}else if(msg==3){
						alert('请输入你手机收到的正确验证码');
					}else if(msg==4){
						alert('验证码发送失败，请联系网站客服人员或者工作人员');
					}else if(msg==5){
						alert('申请失败，请联系网站客服人员或者工作人员');
					}else if(msg==6){
						alert('验证码，已经发送到你的手机,请查收');
					}else if(msg==7){
						alert('请先发送验证码,收到验证码再提交');
					}else{
						alert('提交失败，请联系网站客服人员或者工作人员');
					}
				}
			});	
		} else {
			alert('请完善信息,或者检测手机号码是否正确')
		}
	});
	
	$("#doCode2").click(function() {
		var yournumber2 = $("#yournumber2").val();
		var d2 = /^[1][358]\d{9}$/;
		if (yournumber2 != "" && d2.test(yournumber2) ) {
			$.ajax({
				type: "POST",
				dataType: "json",
				url:"/verify/verify.php",
				data:"yournumber="+yournumber2,
				success: function(msg){
					if(msg==1){
						alert('申请成功，稍后我们的客服人员会联系你！');
					}else if(msg==2){
						alert('请输入正确的手机号码');
					}else if(msg==3){
						alert('请输入你手机收到的正确验证码');
					}else if(msg==4){
						alert('验证码发送失败，请联系网站客服人员或者工作人员');
					}else if(msg==5){
						alert('申请失败，请联系网站客服人员或者工作人员');
					}else if(msg==6){
						alert('验证码，已经发送到你的手机,请查收');
					}else if(msg==7){
						alert('请先发送验证码,收到验证码再提交');
					}else{
						alert('提交的信息不能为空');
					}
				}
			});
			yzmclick2()
		} else {
			alert('请完善信息,或者检测手机号码是否正确,或者检测是否发送过验证码')
		}
	});
	
	$("#dosubmit3").click(function() {
		var yourname3 = $("#yourname3").val();
		var yournumber3 = $("#yournumber3").val();
		var code3 = $("#code3").val();
		var urlfrom3 = $("#urlfrom3").val();
		var urlpage3 = $("#urlpage3").val();
		var pdtype3 = $("#pdtype3").val();
		var d3 = /^[1][358]\d{9}$/;
		
		if (yourname3 != "" && d3.test(yournumber3) && code3 != "" && yournumber3 != "") {
			$.ajax({
				type: "POST",
				dataType: "json",
				url:"/verify/verify.php",
				data:"yourname="+yourname3+"&yournumber="+yournumber3+"&code="+code3+"&urlfrom="+urlfrom3+"&urlpage="+urlpage3+"&pdtype="+pdtype3,
				success: function(msg){
					if(msg==1){
						window.location.href="tips.html";
					}else if(msg==2){
						alert('请输入正确的手机号码');
					}else if(msg==3){
						alert('请输入你手机收到的正确验证码');
					}else if(msg==4){
						alert('验证码发送失败，请联系网站客服人员或者工作人员');
					}else if(msg==5){
						alert('申请失败，请联系网站客服人员或者工作人员');
					}else if(msg==6){
						alert('验证码，已经发送到你的手机,请查收');
					}else if(msg==7){
						alert('请先发送验证码,收到验证码再提交');
					}else{
						alert('提交失败，请联系网站客服人员或者工作人员');
					}
				}
			});	
		} else {
			alert('请完善信息,或者检测手机号码是否正确')
		}
	});
	
	$("#doCode3").click(function() {
		var yournumber3 = $("#yournumber3").val();
		var d3 = /^[1][358]\d{9}$/;
		if (yournumber3 != "" && d3.test(yournumber3) ) {
			$.ajax({
				type: "POST",
				dataType: "json",
				url:"/verify/verify.php",
				data:"yournumber="+yournumber3,
				success: function(msg){
					if(msg==1){
						alert('申请成功，稍后我们的客服人员会联系你！');
					}else if(msg==2){
						alert('请输入正确的手机号码');
					}else if(msg==3){
						alert('请输入你手机收到的正确验证码');
					}else if(msg==4){
						alert('验证码发送失败，请联系网站客服人员或者工作人员');
					}else if(msg==5){
						alert('申请失败，请联系网站客服人员或者工作人员');
					}else if(msg==6){
						alert('验证码，已经发送到你的手机,请查收');
					}else if(msg==7){
						alert('请先发送验证码,收到验证码再提交');
					}else{
						alert('提交的信息不能为空');
					}
				}
			});
			yzmclick3()
		} else {
			alert('请完善信息,或者检测手机号码是否正确,或者检测是否发送过验证码')
		}
	});	
	
});



//重新发送验证码
function yzmclick(){
    var ipt_bt=$('#doCode');
	var times=120;
	ipt_bt.attr('disabled','disabled');
	btno();
	setTimeout('cleartime()',times*1000+1000);
};
function btok(){
	var stime=$('#stimes');
	var st=stime.html();
	stime.html(st-1);
	$('#doCode').val(st-1 + '秒后重发');
	if(st==1){
		$('#doCode').removeAttr('disabled');
		};
	};
function btno(){
	t=setInterval ('btok()', 1000);
	};
function cleartime(){
	clearTimeout(t);
	$('#stimes').html(120);
	$('#doCode').val('重新发送');
	};
	
	
	
function yzmclick1(){
    var ipt_bt1=$('#doCode1');
	var times1=120;
	ipt_bt1.attr('disabled','disabled');
	btno1();
	setTimeout('cleartime1()',times1*1000+1000);
};
function btok1(){
	var stime1=$('#stimes1');
	var st1=stime1.html();
	stime1.html(st1-1);
	$('#doCode1').val(st1-1 + '秒后重发');
	if(st1==1){
		$('#doCode1').removeAttr('disabled');
		};
	};
function btno1(){
	t1=setInterval ('btok1()', 1000);
	};
function cleartime1(){
	clearTimeout(t1);
	$('#stimes1').html(120);
	$('#doCode1').val('重新发送');
	};



	
function yzmclick2(){
    var ipt_bt2=$('#doCode2');
	var times2=120;
	ipt_bt2.attr('disabled','disabled');
	btno2();
	setTimeout('cleartime2()',times2*1000+1000);
};
function btok2(){
	var stime2=$('#stimes2');
	var st2=stime2.html();
	stime2.html(st2-1);
	$('#doCode2').val(st2-1 + '秒后重发');
	if(st2==1){
		$('#doCode2').removeAttr('disabled');
		};
	};
function btno2(){
	t2=setInterval ('btok2()', 1000);
	};
function cleartime2(){
	clearTimeout(t2);
	$('#stimes2').html(120);
	$('#doCode2').val('重新发送');
	};
	
	
	
function yzmclick3(){
    var ipt_bt3=$('#doCode3');
	var times3=120;
	ipt_bt3.attr('disabled','disabled');
	btno3();
	setTimeout('cleartime3()',times3*1000+1000);
};
function btok3(){
	var stime3=$('#stimes3');
	var st3=stime3.html();
	stime3.html(st3-1);
	$('#doCode3').val(st3-1 + '秒后重发');
	if(st3==1){
		$('#doCode3').removeAttr('disabled');
		};
	};
function btno3(){
	t3=setInterval ('btok3()', 1000);
	};
function cleartime3(){
	clearTimeout(t3);
	$('#stimes3').html(120);
	$('#doCode3').val('重新发送');
	};