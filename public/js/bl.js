
$(function() {
	$('.bl_company_js').click(function() {
	    $('.bl_company').css("display","block").siblings().css("display","none");
	    $('.bl_lb').css({"display":"block"});
	    $('.bl_top').css({"display":"block"});
    });
	$('.bl_product_js').click(function() {
		$('.bl_product').css("display","block").siblings().css("display","none");
	    $('.bl_lb').css({"display":"block"});
	    $('.bl_top').css({"display":"block"});
	});
	$('.bl_EnterpriseDynamics_js').click(function() {
		$('.bl_EnterpriseDynamics').css("display","block").siblings().css("display","none");
	    $('.bl_lb').css({"display":"block"});
	    $('.bl_top').css({"display":"block"});
	});
	$('.bl_contact_js').click(function() {
		$('.bl_contact').css("display","block").siblings().css("display","none");
		$('.bl_top').css({"display":"block"});
	});
})