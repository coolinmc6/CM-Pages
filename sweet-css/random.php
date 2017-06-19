<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random</title>
	<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Itim|Pacifico|Walter+Turncoat" rel="stylesheet">
	<link rel="stylesheet" href="../css/sweet-random.css">
</head>
<body>
	<!-- <div class="container">
		<div class="ball"></div>
	</div> -->

	<div class="pulse"></div>


	<div class="box">

	</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
	<script>
		$('.ball').on('click', function() {
			console.log($(this))
			$('.ball').animate({
				'left': '+32px',
				'background-color': 'red'
			}, 500)
		})

		function addSquare() {
			var rand = Math.random();
			console.log(rand);
			var div = document.createElement('div')
			$(div).addClass('style');

			var title = document.createElement('div');
			$(title).addClass('header');
			$(title).append('Name Random #' + Math.floor(Math.random()*200,2))
			
			var img = document.createElement('img');
			$(img).addClass('video')
			$(img).attr('src','../css/video_icon.png');

			var points = document.createElement('div');
			$(points).addClass('points');
			$(points).append('Level ' + Math.floor(Math.random()*5) + '<br>')
			$(points).append(Math.floor(Math.random()*1000,2) + ' / ' + (Math.floor(Math.random()*10000,4)+10000))

			var bottom = document.createElement('div');
			$(bottom).addClass('bottom');
			$(bottom).append('Category #')

			

			$(div).append(title)
			$(div).append(img);
			$(div).append(points);
			if(rand < 0.35) {
				$(div).addClass('cat1')

			} else if(rand < 0.49) {
				$(div).addClass('cat2')
			} else if(rand < 0.63) {
				$(div).addClass('cat3')
			} else if(rand < 0.93) {
				$(div).addClass('cat4')
			} else {
				$(div).addClass('cat5')
			}
			$(div).append(bottom);
			$('.box').append(div);
		}
		
		for(var i = 0; i < 150; i++) {
			addSquare();
		}
		
	</script>
	
</body>
</html>