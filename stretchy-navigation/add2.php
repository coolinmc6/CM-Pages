<!-- add2.php -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add v2</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/add2.css">

</head>
<body>
	<nav class="fixed">
		
		<ul class="link-btn-group">
			<li class="menu-item-start"><a href="#"><img src="../images/image.png" alt=""></a></li>
			<li class="menu-item-start"><a href="#"><img src="../images/camera.png" alt=""></a></li>
			<a href="#" id="add" class="menu"></a>
			<li class="menu-item-start"><a href="#"><img src="../images/image.png" alt=""></a></li>
			<li class="menu-item-start"><a href="#"><img src="../images/camera.png" alt=""></a></li>
		</ul>
	</nav>
	<div class="modal">
		
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		$('#add').click(function(){
			console.log("hello");
			$('.modal').css('display','block');
			$('.menu').addClass('menu-animate');
			$('.menu').removeClass('menu-reverse');
			$('.menu-item-start').addClass('menu-item')

		});
		$('.modal').click(function(){
			$(this).css('display','none');
			$('.menu').addClass('menu-reverse');
			$('.menu').removeClass('menu-animate');
			$('.fixed ul li').css('display','none');
		})
	</script>
</body>
</html>