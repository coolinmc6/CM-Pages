<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP and MySQL for Dynamic Web Sites</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<style>
		table td, table th {
			text-align: center;

		}
	</style>

</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>PHP and MySQL for Dynamic Web Sites</h1>
		</div>
		<h2>Chapter 3</h2>
		<ul>
			<li>It looks like headers/footers and other files that are "included" in another file go inside
			an "includes" folder.</li>
			<li></li>
			<li></li>
		</ul>
		<h2>Chapter 4: Introduction to SQL and MySQL</h2>
		<ul>
			<li>Here are my key details:</li>
			<ul>
				<li>
					<code>
						$host = "localhost";<br>
						$user = "root";<br>
						$db_name = "Colin";<br>
						$pass = "password";
					</code>
				</li>
			</ul>
			<ul>The table I'm using at work is: Ullmanch4</ul>
			<li>Here is how I access MySQL from the command line:</li>
			<ul>
				<li><code>$ /Applications/MAMP/Library/bin/mysql -h localhost -uroot -ppassword Colin</code></li>
				<li><strong>Table Name: </strong>Ulmanch4</li>
			</ul>
			<br>
			<div>
				<table style="width: 50%" class="table table-condensed table-hover table-striped table-sm">
					<tr>
						<th>Column Name</th>
						<th>Type</th>
					</tr>
					<tr>
						<td>user_id</td>
						<td>MediumINT, auto-increment, primary key</td>
					</tr>
					<tr>
						<td>first_name</td>
						<td></td>
					</tr>
					<tr>
						<td>last_name</td>
						<td></td>
					</tr>
					<tr>
						<td>email</td>
						<td></td>
					</tr>
					<tr>
						<td>password</td>
						<td></td>
					</tr>
					<tr>
						<td>registration_date</td>
						<td></td>
					</tr>
				</table>
			</div>
				
			<ul>
				<li>I need to give the host (localhost), the user (root), the password (password) and the database name (Colin)</li>
				<li>The MySQL command line is pretty much just SQL.</li>	
				<li>Here is my SQL-generator: <a href="SQLgenerator.php">SQL Generator</a>.  It has dummy data for this exercise.</li>
				<li>The rest of Chapter 4 is just SQL which I have an okay grasp on.  Advanced MySQL starts on p.169.</li>
			</ul>
		</ul>
		<h2>Chapter 5: Advanced SQL and MySQL</h2>	
		<ul>
			
		</ul>


	</div>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>