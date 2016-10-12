<!-- index.php -->
<?php 
	include 'db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Udemy: PHP - AJAX chat App</title>
	<link rel="stylesheet" href="style.css">
	<script>
		// AJAX is a syntax that allows you to run scripts in the background
		function ajax(){

			// this is the object that holds the whole thing?
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				// 4 is completed and 200 is successful
				if(req.readyState == 4 && req.status == 200){
					// whatever HTML element with id chat, it's inner HTML must be 
					// changed to ajax's responseText.
					document.getElementById('chat').innerHTML = req.responseText;
				} // end of if-statement
			} // end of req.onreadystatechange function

			// GET is the type, chat.php we had not created yet
			req.open('GET','chat.php',true);
			req.send();

		} // end of ajax function

		// runs the ajax() function every 1 second
		setInterval(function(){ ajax(); }, 1000);
	</script>
</head>
<!-- added onload around 10th min -->
<body onload="ajax();">
	<div id="container">
		<div id="chat_box">
		<!-- This is where the chat.php stuff used to be -->
			<div id="chat"></div>
		</div>
		<form action="index.php" method="post">
			<input type="text" name="name" placeholder="enter name"/>
			<textarea name="msg" placeholder="enter message"></textarea>
			<input type="submit" name="submit" value="Send it"/>
		</form>
		<?php 
		if(isset($_POST['submit'])){

			// I believe that $_POST[] grabs whatever the local variable is.  So we've named
			// that variable 'name' so the PHP variable $name will equal the HTML local variable
			// that they've entered which we call 'name'
			$name = $_POST['name'];
			$msg = $_POST['msg'];
			$query = "INSERT INTO chat (name,msg) values ('$name','$msg');";

			$run = $con->query($query);

			if($run){
				// echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";

			}
		}
		


		 ?>
	</div>
	
</body>
</html>