$(function(){
	$(".side ul li").hover(function(){
		if ($(this).find(".sidebox").text()==""){
			$(this).find(".sidebox").stop().animate({"width":"54px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#ae1c1c"});
		}else {
			$(this).find(".sidebox").stop().animate({"width":"124px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#ae1c1c"});
		}
		$(this).find(".circle").show();
	},function(){
		$(this).find(".sidebox").stop().animate({"width":"54px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#7DBEFF"});
		$(this).find(".circle").hide();	
	});
});

// $(function(){
// 	$(".city").hover(function(){
// 		$(this).find(".cityList").show();
// 	},function(){
// 		$(this).find(".cityList").hide();
// 	});
// });
$(function(){
	$('.moveShow').hover(function(){
		$(this).find('.showCon').show();
		$(this).find('.showCon').removeClass('hide');
	},function(){
		$(this).find('.showCon').hide();
	});
});
//回到顶部函数
function goTop(){
	$('html,body').animate({'scrollTop':0},200);
}
$(function(){
	var nav = $('.fixed-nav');
	var navtop = nav.offset().top;
	if (navtop <= 0) {
		navtop = 1;
	}
	$(window).scroll(function(){
		if($(document).scrollTop() >= navtop){
			nav.addClass("navbar-fixed-top");
		}else{
			nav.removeClass("navbar-fixed-top")
		}
	});
});
$(function(){
	$(".nav ul li").hover(function(){
		$(this).children("ul").css({"display":"block"});
		$(this).css({'background-color':'#E8E8E8'});
	},function(){
		$(this).children("ul").css({"display":"none"});
		$(this).css({'background-color':'#fff'});
	});
});

