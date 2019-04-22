$(function(){
	$('.bl_cx').on('click',function() {
		$('.bl_cx').hide();
		$('.bl_icon').animate({"margin-right":"100px"},1000);
		$('.bl_cx_k').show().animate({"width":"300px","border-bottom":"2px solid black"},1000);
	});
	$('.bl_cx_k').blur(function() {
		$('.bl_icon').animate({"margin-right":"350px"},1000);
		$('.bl_cx_k').show().animate({"width":"0px","border-bottom":"0px"},1000);
		$('.bl_cx_k').hide();
		$('.bl_cx').show();
	});
	$('.bl_contact_company_all').on('click',function(){
		$('.bl_contact_company').show();
		$('.bl_contact_company_Feedback').hide();
	});
	$('.bl_contact_company_Feedback_all').on('click',function(){
		$('.bl_contact_company').hide();
		$('.bl_contact_company_Feedback').show();
	})
})