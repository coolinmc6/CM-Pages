<!-- carousel.php -->
<?php 

/*
Dynamically receive an array of images for this file

















*/
$name = "Colin";
$array = ["apple", "orange", "pear"];

$name = 'Bob Marley';






 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Carousel v2</title>
	<link rel="stylesheet" href="css/carousel.css">
</head>
<body>
	<div class="carousel-container">
		<img id="mainIMG" src="images/excavator_2016_cat.jpeg" alt="">

		<div class="dot-box">
			<div id="one" class="dot current"></div>
			<div id="two" class="dot"></div>
			<div id="three" class="dot current"></div>	
		<!-- </div>

		<div class="dot-box"> -->
			<div id="s0" class="dot current"></div>
			<div id="s1" class="dot"></div>
			<div id="s2" class="dot current"></div>	
		</div>
		
		<div class="prev scroll">&#10094;</div>
		<div class="next scroll">&#10095;</div>
	</div>

	<script>
		var images = ["","images/excavator_1990_cat.jpg", "images/excavator_2011_cat.jpg", 
					"images/excavator_2016_cat.jpeg"];
		var mainIMG = document.getElementById('mainIMG');
		s1 = document.getElementById('one')
		s2 = document.getElementById('two')
		s3 = document.getElementById('three')

		var allSlides = [];
		allDots = document.querySelectorAll('.dot')
		for (var i = 0; i < allDots.length; i++) {
			allSlides.push("s" + i);
		}
		// console.log(allSlides);
		// var fruits = <?php echo json_encode($array); ?>
		// console.log(fruits);
		console.log('"' + <?php echo $name; ?> + '"');
		

		// s1.addEventListener('click', function(){
		// 	for (var i = 0; i < allDots.length; i++){
		// 		allDots[i].classList.remove('current');
		// 	}
		// 	s1.classList.add('current');
		// 	mainIMG.src = images[1];
		// });
		// s2.addEventListener('click', function(){
		// 	for (var i = 0; i < allDots.length; i++){
		// 		allDots[i].classList.remove('current');
		// 	}
		// 	s2.classList.add('current');
		// 	mainIMG.src = images[2];
			
		// });
		// s3.addEventListener('click', function(){
		// 	for (var i = 0; i < allDots.length; i++){
		// 		allDots[i].classList.remove('current');
		// 	}
		// 	s3.classList.add('current');
		// 	mainIMG.src = images[3];
			
		// });
		// console.log(allDots);
		for(var i = 0; i < allDots.length; i++){
			// console.log(allDots);
			console.log(allDots[i]);

			allDots[i].addEventListener("click", function(){
				for (var j = 0; j < allDots.length; j++){
					a = document.getElementById('"' + allSlides[j] + '"');
					console.log(a);
					
				}
				
				
			});
			
		}

	</script>
	<?php
	echo '<script>';
	echo 'var name = ' . json_encode($name) . ';';
	echo '</script>';
	?>
</body>
</html>