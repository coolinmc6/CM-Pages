<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read Progress Bar</title>
	<link rel="stylesheet" href="../css/reset.css">
	<style>
		body {
			position: relative;
		}
		.dark, .light {
			height: 500px;
		}
		.dark {
			background-color: #1985A1;
		}
		.light {
			background-color: #C5C3C6;
		}
		.progress-bar {
			position: fixed;
			bottom: 0;
			left: 0;
			height: 3px;
			background-color: #EA3546;
			width: 0%;
		}
	</style>
</head>
<body>

	<div class="dark">
		<h1 id="hello">hello</h1>
		<h1 id="hello">hello</h1>
	</div>
	<div class="light">
		
	</div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="dark"></div>
	<div class="light"></div>
	<div class="progress-bar"></div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		var body = document.getElementsByTagName('body');
		
		console.log(document.body.scrollTop)
		var h = document.getElementById('hello');
		console.log(h);
		var darks = $('.dark');
		console.log(darks);

		function progressBar() {
			console.log(body[0].clientHeight)
			console.log(document.body.scrollTop)
			var height = body[0].clientHeight;
			var windowH = window.innerHeight;
			console.log(windowH)
			var scroll = document.body.scrollTop;
			var width = ((scroll)/(height-windowH)*100) + '%';
			$('.progress-bar').css('width', width)
		}
		$(document).on('scroll', progressBar)
	</script>
</body>
</html>