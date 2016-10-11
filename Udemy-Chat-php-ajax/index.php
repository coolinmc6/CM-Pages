<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Udemy: PHP - AJAX chat App</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="container">
		<div id="chat_box">
			<div id="chat_data">
				<span style="color: blue;">Colin:</span>
				<span style="color: black;">How are you? (static message)</span>
				<span style="float: right;">12:30pm</span>
			</div>
			<form action="index.php" method="post">
				<input type="text" name="name" placeholder="enter name"/>
				<textarea name="enter_message" placeholder="enter message"></textarea>
				<input type="submit" name="submit" value="Send it"/>
			</form>
		</div>
	</div>
	
</body>
</html>