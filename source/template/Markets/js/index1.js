$(function(){
var flag = true;
$(".last_news .switchRight").click(function(){
	switchMain($(this),"right",580,1);
})
$(".last_news .switchLeft").click(function(){
	switchMain($(this),"left",580,1);
})
$(".teacher .switchRight").click(function(){
	switchMain($(this),"right",229,4);
})
$(".teacher .switchLeft").click(function(){
	switchMain($(this),"left",229,4);
})


function switchMain(obj,direction,item,num){
	var len = $(obj).parents(".switchbox").find(".switchlist").find("li").size();
	var whole = item * len;
	var shownum = num * len;
	var ml = parseInt($(obj).parents(".switchbox").find(".switchlist").css("margin-left").replace("px",""));
	if (flag) {
		
		switch(direction){
			case "left":
				// 左侧按钮
				if ( ml < 0 && flag) {
					var ti = 0;
					t = setInterval(function(){
						flag = false;
						ti ++;
						if (ti <5) {
							$(obj).parents(".switchbox").find(".switchlist").css("margin-left",(item/(5-ti))+ml+'px');
						}else{
							$(obj).parents(".switchbox").find(".switchlist").css("margin-left",item+ml+'px');
							clearInterval(t);
							flag = true;
						};
					},100)

					
					if ($(obj).parents(".switchbox").find(".switchStatu").length > 0) {
						// alert(Math.abs(ml+item)/item);
						$(obj).parents(".switchbox").find(".switchStatu").find("span").removeClass("focus");
						$(obj).parents(".switchbox").find(".switchStatu").find("span").eq(Math.abs(ml+item)/item).addClass("focus");
					};
				};
				
			break;
			case "right":
				// 右侧按钮
				if ( whole + ml > item * num && flag) {
					var ti = 0;
					t = setInterval(function(){
						flag = false;
						ti ++;
						if (ti <10) {
							$(obj).parents(".switchbox").find(".switchlist").css("margin-left",ml-(item/10*ti)+'px');
						}else{
							$(obj).parents(".switchbox").find(".switchlist").css("margin-left",ml-item+'px');
							clearInterval(t);
							flag = true;
							// $(obj).parents(".switchbox").find(".switchRight").addClass("opac");
						};
					},50)
					
					if ($(obj).parents(".switchbox").find(".switchStatu").length > 0) {
						//alert(Math.abs(ml-item)/item);
						$(obj).parents(".switchbox").find(".switchStatu").find("span").removeClass("focus");
						$(obj).parents(".switchbox").find(".switchStatu").find("span").eq(Math.abs(ml-item)/item).addClass("focus");
					};
				};
				
				
			break;
			default:
			break;
		}
	};
}





})

    var alcohol = $(".banner li");
    var alcohol_small = $(".banner_small li");
    var flag_img = true;
    var flag_title = true;
    var img = 0;
    var title = 0;
    var done_img = false;
    var done_title = false;

    fade_in(0);
    slide_in(0);
    auto_change();

    // 自动切换
    function auto_change(){
        a = setInterval(function(){
            i = img + 1;
            if (i > alcohol.size()-1) {
                i = 0;
            };
            change(i);
        },5000)
    }

    // 点击切换
    function change(n){

        if (flag_img  && img!==n) {
            
            flag_img = false;
            flag_title = false;
            clearInterval(a);
            auto_change();
            fade_out(img);
            slide_out(title);
            // alert(1);
            var t = setInterval(function(){
                if (done_img) {
                    alcohol_small[title].className = "";
                    alcohol_small.removeClass("focus");
                    alcohol_small.eq(n).addClass("focus");
                    fade_in(n);
                    slide_in(n);
                    clearInterval(t);
                };
            },50)
        };
    }

    
    // 大图渐隐
    function fade_out(n){
        done_img = false;
        var i = 1;
        var t1 = setInterval(function(){
            if (i>0) {
                i = i-0.1;
                alcohol.eq(n).css("opacity",i);
            }else{
                alcohol.eq(n).css("opacity",0);
                clearInterval(t1);
                alcohol.eq(n).css("display","none");
                done_img = true;
            }
        }, 50);
    }

    // 大图渐显
    function fade_in(n){
        
        alcohol.eq(n).css("display","block");
        alcohol.eq(n).css("opacity",0);
        var k = 0;
        var t2 = setInterval(function(){
            if (k<1) {
                k = k+0.1;
                alcohol.eq(n).css("opacity",k);
            }else{
                alcohol.eq(n).css("opacity",1);
                clearInterval(t2);
                flag_img = true;
                img = n;
            }
        }, 50);
    }	


    // 标题滑入
    function slide_in(n){
        
        var o = 18;
        var t3 = setInterval(function(){
            if (o>8) {
                o = o -3;
                // alcohol[n].getElementsByTagName('div')[0].style.bottom = o+"px";
                // alcohol[n].getElementsByTagName('p')[0].style.bottom = o+"px";
                // alcohol_small.eq(n).css("padding-top",o+"px");
            }else{
                // alcohol[n].getElementsByTagName('div')[0].style.bottom = "8px";
                // alcohol[n].getElementsByTagName('p')[0].style.bottom = "8px";
                // alcohol_small.eq(n).css("padding-top","8px");
                clearInterval(t3);
                flag_title = true;
                title = n;
            };
        },50)
    }

    // 标题滑出
    function slide_out(n){
        done_title = false;
        var o = 8;
        var t3 = setInterval(function(){
            if (o < 18) {
                o = o +3;
                // alcohol[n].getElementsByTagName('div')[0].style.bottom = o+"px";
                // alcohol[n].getElementsByTagName('p')[0].style.bottom = o+"px";
                // alcohol_small.eq(n).css("padding-top",o+"px");
            }else{
                // alcohol[n].getElementsByTagName('div')[0].style.bottom = "-24px";
                // alcohol[n].getElementsByTagName('p')[0].style.bottom = "-24px";
                // alcohol_small.eq(n).css("padding-top","18px");
                clearInterval(t3);
                done_title = true;
            };
        },50)
    }


    // tab_c

    function tab_c(e,n){
        // alert($(e).parents(".ibox").length)
        
        $(e).parents(".tab_t").find("span").removeClass("focus");
        $(e).addClass("focus");
        $(e).parents(".ibox").find(".tab_img").addClass("hide");
        $(e).parents(".ibox").find(".tab_img").eq(n).removeClass("hide");
    }