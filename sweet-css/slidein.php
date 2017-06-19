<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/slidein.css">
	<title>Slide In</title>
</head>
<body>
	<div class="main">
		<div class="box" id="box-1"></div>
		<div class="box" id="box-2"></div>
		<div class="box" id="box-3"></div>
		<div class="box" id="box-4"></div>
		<div class="box" id="box-5"></div>
		<div class="box" id="box-6"></div>
		<div class="box" id="box-7"></div>
		<div class="box" id="box-8"></div>
		<div class="box" id="box-9"></div>
		<div class="box" id="box-10"></div>
	</div>
	






	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script>
		$(document).ready(function() {
			// var boxes = $.find('.box');
			// $.each(boxes, function() {
			// 	var element = $(this);
			// 	element.addClass('slide-in')
			// })
			var web_window = $(window)
			var boxes = $.find('.box');
									
			
			function checkView() {
				var window_height = web_window.height();	
				var scroll_pos = web_window.scrollTop();	

				$.each(boxes, function() {
					var element = $(this);
					var eHeight = $(element).outerHeight();
					var top_pos = $(element).offset().top;

					if((window_height + scroll_pos > top_pos) || (top_pos + eHeight < scroll_pos)) {
						// console.log(scroll_pos)
						// console.log($(element).attr('id'), '-', top_pos)
						$(element).addClass('slide-in');
					} else {
						$(element).removeClass('slide-in');
					}
				})	
			}

			$(window).on('scroll', function() {
				checkView();
			})
			
		})	


	</script>
	
</body>
</html>