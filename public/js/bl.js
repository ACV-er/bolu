$(function(){
/*	function getUrlParam(name) { var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象 
	var r = window.location.search.substr(1).match(reg); //匹配目标参数
	 if (r != null) return unescape(r[2]); 
	 return null; //返回参数值 }
	}
	var page = getUrlParam('page');
	if (page == 1) {
		$('.bl_company').css("display","block").siblings().css("display","none");
	    $('.bl_top,.bl_lb').css({"display":"block"}).removeClass('bl_product_topbg');
		$('body').css({"background": "url(./img/bg2.jpg)"," background-size": "100% 100%"});
	}
	if (page == 2) {
		$('.bl_EnterpriseDynamics').css("display","block").siblings().css("display","none");
	    $('.bl_lb,.bl_top').css({"display":"block"});
	    $('.bl_top').removeClass('bl_product_topbg');
		$('body').css({"background": "url(./img/bg2.jpg)","background-size": "100% 100%"});
	}
	if (page == 3) {
		$('.bl_product').css("display","block").siblings().css("display","none");
	    $('.bl_lb').css({"display":"block"});
	    $('.bl_top').css({"display":"block"}).addClass('bl_product_topbg');
		$('body').css({"background":"#d9eee5"});
	}
	if (page == 4) {
		$('.bl_contact').css("display","block").siblings().css("display","none");
		$('.bl_top').css({"display":"block"});
		$('.bl_top').css({"display":"block"}).addClass('bl_product_topbg');
		$('body').css({"background":"#d9eee5"});
	}
	if (page == 5) {
		$('.bl_contact').css("display","block").siblings().css("display","none");
		$('.bl_top').css({"display":"block"});
		$('.bl_top').css({"display":"block"}).addClass('bl_product_topbg');
		$('body').css({"background":"#d9eee5"});
	}*/
	$('.bl_cx').on('click',function() {
		$('.bl_cx').hide();
		$('.bl_icon').animate({"margin-right":"100px"},1000);
		$('.bl_cx_k').show().animate({"width":"300px","border-bottom":"2px solid black"},1000,function(){
			$('.bl_icon').animate({"margin-right":"350px"},1000);
			$('.bl_cx_k').show().animate({"width":"0px","border-bottom":"0px"},1000);
			$('.bl_cx_k').hide();
			$('.bl_cx').show();
		});
	});

	$('.bl_cx_k').blur(function() {
		$('.bl_icon').animate({"margin-right":"350px"},1000);
		$('.bl_cx_k').show().animate({"width":"0px","border-bottom":"0px"},1000);
		$('.bl_cx_k').hide();
		$('.bl_cx').show();
	})
})