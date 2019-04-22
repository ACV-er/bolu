$(function () {
	/*bl_ajax_company_word*/
	$.ajax({
		type: 'get',
		url: 'https://bolu.acver.xyz/posts/1/1',
		dataType:'json',
		success:function (data) {
			/*console.log(data);
			var title = data.data[0].title;
			$('.ajax_company_word_1').html(title);
			var description = data.data[1].description;
			$('.ajax_company_word_2').html(description);
			var content = data.data[2].content;
			$('.ajax_company_word_3').html(content);
			$('.ajax_company_img_1').attr('src',data.data[0].img);
			$('.ajax_company_img_2').attr('src',data.data[1].img);
			$('.ajax_company_img_3').attr('src',data.data[2].img);
			$('.ajax_company_img_4').attr('src',data.data[3].img);
			$('.ajax_company_img_5').attr('src',data.data[4].img);
			$('.ajax_company_img_6').attr('src',data.data[5].img);
			$('.ajax_company_img_7').attr('src',data.data[6].img);
			$('.ajax_company_img_8').attr('src',data.data[7].img);
			$('.ajax_company_img_9').attr('src',data.data[8].img);*/
		}
	})

	/*bl_ajax_company_img*/
	
})