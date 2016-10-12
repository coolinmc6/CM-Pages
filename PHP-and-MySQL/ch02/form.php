<!-- form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HTML Form</title>
</head>
<body>
	<form action="handle_form.php" method="post">
		<fieldset>
			<legend>Enter your information in the form below:</legend>
			<p><strong>Name: </strong><input type="text" name="name"></p>
			<p><strong>Email Address: </strong><input type="text" name="email"></p>
			<p><strong>Gender: </strong>
				<input type="radio" name="gender" value="M"> Male
				<input type="radio" name="gender" value="F"> Female
			</p>
			<p><strong>Age: </strong>
				<select name="age" id="">
					<option value="0-29">Under 30</option>
					<option value="30-60">Between 30 and 60</option>
					<option value="60+">Over 60</option>
				</select>
			</p>
			<p><strong>Comments: </strong><br>
				<textarea name="comments" cols="40" rows="5"></textarea>
			</p>
		</fieldset>
		<p></p><input type="submit" name="submit" value="Submit My Information">
	</form>
	<h3>Notes</h3>
	<ul>
		<li>I used the $_POST[] variable instead of $_REQUEST which holds GET, POST.</li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	
</body>
</html>