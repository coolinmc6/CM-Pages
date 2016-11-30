<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Colin's Repo Index</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<?php include_once("header.php") ?>

 
	<div class="page-header text-center">
		<h1>Colin's Repo Index</h1>
	</div>

	<div id="main">
		<ul>
			<li><a href="random/doubleknot.php">DoubleKnot</a></li>
			<ul>
				<li>Darkened color background on an image</li>
				<li>Here is the original site: <a href="http://www.doubleknotphilly.com/">DoubleKnot</a>.</li>
				<li>They do an overlay div with some opacity (0.9) and make it black.  I did it another way but should play with both.</li>
			</ul>
			<li><a href="positioning1.php">Positioning</a></li>
			<li><a href="parallax.php">Parallax</a></li>
			<li><a href="PHP-and-MySQL/index.php">PHP and MySQL for Dynamic Websites</a></li>
			<li><a href="sass-test1.php">Sass Test #1</a></li>
			<li><a href="stretchy-navigation/add.html">Stretchy Navigation: Add</a></li>
			<li><a href="stretchy-navigation/edit.html">Stretchy Navigation: Edit</a></li>
			<li><a href="stretchy-navigation/index.html">Stretchy Navigation: Index</a></li>
			<li><a href="Udemy-Chat-php-ajax/index.php">Udemy Chat App</a></li>
		</ul>
		<hr>

		<div class="content">
			<h1>Random Items</h1>
			<button onClick="showDiv()">Show the Div</button>
			<div id="confirm-div"></div>
			<a href="jump.php" onClick="return confirm('Are you sure?')">Reload page if Yes</a>
			
			<div class="gradients">
				<div class="capsule">
					<div class="levels l1"></div>
				</div>
				<div class="capsule">
					<div class="levels l2"></div>
				</div>
				<div class="capsule">
					<div class="levels l3"></div>
				</div>
				<div class="capsule">
					<div class="levels l4"></div>
				</div>
				<div class="capsule">
					<div class="levels l5"></div>
				</div>
				<div class="capsule">
					<div class="levels l6"></div>
				</div>
				<div class="capsule">
					<div class="levels l7"></div>
				</div>

				<div class="gradient-css">
					
				</div>
				<div class="gradient lb1"></div>
				<div class="gradient lb2"></div>
				<div class="gradient lb3"></div>
				<div class="gradient lb4"></div>
				<div class="gradient lb5"></div>
				<div class="gradient lb6"></div>
				<div class="gradient lb7"></div>
				
			</div>
			
		</div>

	</div> <!-- End of main div -->
	

	
	<!-- Footer -->
	<?php include_once("footer.php") ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		var confDiv = document.getElementById('confirm-div');
		var showDiv = function(){
			var conf = confirm("Are you sure you want to show the div?");

			if (conf) {
				confDiv.style.display = 'block';
			} else {
				confDiv.style.display = 'none';
			}
		}
	</script>
</body>
</html>
