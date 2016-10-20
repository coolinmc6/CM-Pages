<!-- SQLgenerator.php -->
<?php 
	$first_names = ["Colin", "Matt", "Steve", "Ray", "Jack", "Mary", "Casey", "Emily", "Susan", "Kathleen", "Cristopher", "Lionel",
					"Robert", "Terry", "Agatha", "Hillary", "William", "Todd", "Remi", "Yoon", "Katie", "Sandra", "Andrea", "Ed", 
					"Mia", "Rob", "Katherine", "Anne"];
	$last_names = ["McNamara", "Herrmann", "Kaplan", "Mongan", "Nedbal", "O'Connor", "Clinton", "Bush", "Trump", "Agnew", "Collins", 
					"Janke", "Merritt", "Mongeau", "Tredinick", "McKeon", "Pinkerton"];
	$email_domains = ["@gmail.com", "@yahoo.com", "@hotmail.com", "@aberdeen-asset.com", "@fedex.com", "@penn.edu", "@joga-academy.com"];
	$password = "password";
	

	array_push($last_names, $first_names[4]);

	$first = $first_names[rand(0,count($first_names)-1)];
	$last = $last_names[rand(0,count($last_names)-1)];
	$email = strtolower($first) . "." . strtolower($last) . $email_domains[rand(0,count($email_domains)-1)];
	$sql2 = "INSERT INTO Ullmanch4 (first_name, last_name, email, password) VALUES('$first', '$last', '$email', '$password');";










 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQL Statement Generator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<div class="jumbotron">
		<div class="page-header">
			<h1>SQL Generator</h1>
		</div>
	</div>
		<p><?php echo($sql2); ?></p>	
	</div>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>