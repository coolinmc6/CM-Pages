<!-- handle_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thank You</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<div class="page-header">
		<h1>Handle Form</h1>
	</div>
		
	

	<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	
	echo "<p>Thank you, <strong>$name</strong>, for the following comments: <br><br>
	<tt>$comments</tt></p><br>
	<p>We will reply to you at <i>$email</i>.</p>
	<p>Your age is $age and your gender is $gender</p>";

	echo "<h4>Validations</h4>";

	if (!empty($_POST['name'])) {
		echo "<p class='text-danger'>Name is confirmed!</p>";
	} else {
		echo "<p>You didn't enter your name!</p>";
	}

	 ?>
	 <p>Go back to the form <a href="form.php">here</a></p>


	 </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
