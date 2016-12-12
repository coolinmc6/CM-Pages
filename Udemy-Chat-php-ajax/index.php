<!-- index.php -->
<?php 
	include 'db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Udemy: PHP - AJAX chat App</title>
	<link rel="stylesheet" href="../css/reset.css">
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
			// CM -> we must bind the variable!
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
	<div class='cm-notes'>
		<h2>Notes</h2>
		<ul>
			<li>This is a very simple chat app that has only a few components.</li>
			<li>Database:</li>
			<table>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>msg</th>
					<th>date</th>
				</tr>
				<tr>
					<td>int(11)</td>
					<td>varchar(255)</td>
					<td>varchar(255)</td>
					<td>timestamp DEFAULT CURRENT_TIMESTAMP</td>
				</tr>
			</table>
			<ul>
				<li>id is the primary key but maybe it should be indexed on name or most likely, user_id</li>
				<li>name will not be name but user_id</li>
				<li>msg will probably need to be a BLOB or something more than 255 characters</li>
				<li>date will be timestamp which is a functionality that I love</li>
			</ul>
			<br>
			<li>There is a div#chat that contains all the contents of my get request to the chat table</li>
			<li>Every time I enter a message and hit send, I insert that message into the database (which must be bound)</li>
			<li>To recreate this, I really don't need that much...let's do this but with jQuery.</li>
			<li><strong>Creating this quickly:</strong></li>
			<ol>
				<li>Create database</li>
				<li>Create div to hold chat</li>
				<li>Create form / input elements to input message</li>
				<li>Write $.post request to insert chat texts</li>
				<li>Write GET request that refreshes every second to get chat, limit 50, order by DESC</li>
				<li>Display overflow to scroll</li>
				<li>Enter some test chats and confirm it works</li>
				<li></li>
			</ol>
		</ul>

	</div>
	<script>
		function myFunction(){
			var date = new Date();
			console.log("hello, it is: " + date)
		}
		// setInterval(function(){ myFunction(); }, 1000);
	</script>
	
</body>
</html>