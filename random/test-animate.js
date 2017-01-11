$(document).on('click',function(){
	if ($('#div1').attr('data-toggle') == 'on') {
		$('#div1').removeClass('slideInRight');
		$('#div1').addClass('slideOutRight');
		$('#div1').attr('data-toggle','off');
		$('#div2').removeClass('slideOutRight');
		$('#div2').addClass('slideInRight');
			
	} else {
		$('#div1').removeClass('slideOutRight');
		$('#div1').addClass('slideInRight');
		$('#div1').attr('data-toggle','on');
		$('#div2').removeClass('slideInRight');
		$('#div2').addClass('slideOutRight');
		
	}


	
});