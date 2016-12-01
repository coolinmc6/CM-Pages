<?php 

if (isset($_GET['reset'])){
	setcookie('count', '');
}
if (!isset($_COOKIE['count'])) {
	setcookie("count", 1);
	
} else {
	$a = $_COOKIE['count'];
	$b = 1 + $a;
	setcookie('count', $_COOKIE['count'] + 1);
}


 ?>
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
		<h2>Links</h2>
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
			<h2>Random Items</h2>
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
				
				<h3 id='#ipheader'>SERVER, GET, POST and COOKIE</h3>
				<div>
					<?php 
						$serverRemote = $_SERVER['REMOTE_ADDR'];
						// $ip2 = $_SERVER['HTTP_CLIENT_IP'];
						$serverName = $_SERVER['SERVER_NAME'];
						$serverSoft = $_SERVER['SERVER_SOFTWARE'];
						$serverProt = $_SERVER['SERVER_PROTOCOL'];
						$serverReq = $_SERVER['REQUEST_METHOD'];
						$serverQuery = $_SERVER['QUERY_STRING'];
						$serverRoot = $_SERVER['DOCUMENT_ROOT'];
						$serverAgent = $_SERVER['HTTP_USER_AGENT'];
						$serverPort = $_SERVER['SERVER_PORT'];
						$getFull = $_GET;
						$postFull = $_POST;
						// $server = $_SERVER[];
						// $server = $_SERVER[];





						$server = 'n/a';

					 ?>
					<p>Your 'REMOTE_ADDR': <strong><?php echo $serverRemote ?></strong></p>
					<p>Your 'SERVER_NAME': <strong><?php echo $serverName ?></strong></p>
					<p>Your 'SERVER_SOFTWARE': <strong><?php echo $serverSoft ?></strong></p>
					<p>Your 'REQUEST_METHOD': <strong><?php echo $serverReq ?></strong></p>
					<p>Your 'QUERY_STRING': <strong><?php echo $serverQuery ?></strong></p>
					<p>Your 'DOCUMENT_ROOT': <strong><?php echo $serverRoot ?></strong></p>
					<p>Your 'HTTP_USER_AGENT': <strong><?php echo $serverAgent ?></strong></p>
					<p>Your 'SERVER_PORT': <strong><?php echo $serverPort ?></strong></p>
					<p>Your full GET request: <strong><?php print_r($getFull) ?></strong></p>
					<p>Your full POST request: <span id='post-variable'></span></p>
					<p>Your : <strong><?php echo $server ?></strong></p>

					<input type="text" name="search" id="getInput">
					<input type="submit" value="Send GET Request (non-AJAX)" id="getSubmit">
					<br>
					<input type="text" name="search" id="postInput">
					<input type="submit" value="Send POST Request (AJAX)" id="postSubmit">
					<br><br>

					<p>Your COOKIE['count'] is: <strong><?php echo $_COOKIE['count'] ?></strong><br>
						<ul>
							<li>Notice how it increases with every get request but NOT post request.  One is an AJAX and the
						other is not.</li>
							<li>To actually change the value of the $_COOKIE variable, I have to use the setcookie() method.</li>
							<li>I'm sure it is probably the same for the $_SESSION variable...</li>
						</ul>
					
					</p>
					<button id="cookie-reset">Reset COOKIE</button>
					

					 <?php 



					  ?>

				</div>
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

		$('#getSubmit').click(function(){
			var url = "";
			var search = $('#getInput').val();
			console.log(search);
			url = "?" + search;
			window.location.href = url;
		})

		$('#postSubmit').click(function(){
			var url = "";
			var search = $('#postInput').val();
			$.post( "/functions/testPost.php", { serverVariable : search , nonInput : "you didn't enter this" }, function( data ) {
			$('#post-variable').html(data);
			});

		
			
			
		});

		$('button').click(function(){
			console.log("hello");
			// window.location.href = "index.php?reset";

		});
	</script>
</body>
</html>
