<?php 

if (isset($_GET['reset'])){
	setcookie('count', '', time() - 3600, "/");
	// setcookie('loggedin', '', time() - 3600, "/");
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

	<div class='container' id="main">
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

				<div class="gradient-css"></div>

				<div class="gradient lb1"></div>
				<div class="gradient lb2"></div>
				<div class="gradient lb3"></div>
				<div class="gradient lb4"></div>
				<div class="gradient lb5"></div>
				<div class="gradient lb6"></div>
				<div class="gradient lb7"></div>
			</div>
				
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
					$serverRoot = $_SERVER['DOCUMENT_ROOT'];
					$serverSelf = $_SERVER['PHP_SELF'];
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
				<p>Your Document Root: <strong><?php echo $serverRoot ?></strong></p>
				<p>Your PHP file name: <strong><?php echo $serverSelf ?></strong></p>
				<p>Your Document Root + file name: <strong><?php echo $serverRoot . $serverSelf ?></strong></p>

				<input type="text" name="search" id="getInput">
				<input type="submit" value="Send GET Request (non-AJAX)" id="getSubmit">
				<br>
				<input type="text" name="search" id="postInput">
				<input type="submit" value="Send POST Request (AJAX)" id="postSubmit">
				<br><br>

				<p>Your COOKIE['count'] is: <strong>
					<?php 
						if (!isset($_COOKIE['count'])){
							echo '&nbsp;&nbsp;your $';
							echo "_COOKIE['count'] is currently null";
						} else {
							echo $_COOKIE['count']; 	
						}
						

					?>
						
					</strong><br>
					<ul>
						<li>Notice how it increases with every get request but NOT post request.  One is an AJAX and the
					other is not.</li>
						<li>To actually change the value of the $_COOKIE variable, I have to use the setcookie() method.</li>
						<li>I'm sure it is probably the same for the $_SESSION variable...</li>
					</ul>
				
				</p>
				<a href="functions/cookie-reset.php" id="cookie-reset">Cookie Reset</a>
				<!-- <button id="cookie-reset">Reset COOKIE</button> -->
				

				 <?php 



				  ?>

			</div> <!-- SERVER, GET, POST and COOKIE div-->

			<h3>Git Branching Discussion</h3>
			<div>
				<p>1. Create a new branch</p>
				<img src="images/branch-how-to1.jpg" alt="">
				<p>2. Make your changes but make sure you are on the right branch in GitHub</p>
				<img src="images/branch-how-to2.jpg" alt="">
				<p>3. Commit your changes and publish.</p>
				<p>3-b. After publishing, you will have a 'blank slate'</p>
				
				<p>4. Click 'pull request'</p>
				<p>5. Switch back over to Master</p>
				<p>6. User the 'Compare' dropdown to see your most recent branch</p>
				<p>7. Merge in changes</p>
			</div>


			
		</div> <!-- End of content div -->

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

		// $('#cookie-reset').click(function(){
		// 	console.log("hello");
			

		// });
	</script>
</body>
</html>
