<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random</title>
	<link rel="stylesheet" href="../css/sweet-random.css">
</head>
<body>
	<div class="container">
		<div class="ball"></div>
	</div>

	<div class="pulse"></div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
	<script>
		$('.ball').on('click', function() {
			console.log($(this))
			$('.ball').animate({
				'left': '+32px',
				'background-color': 'red'
			}, 500)
		})
		
	</script>
	
</body>
</html>