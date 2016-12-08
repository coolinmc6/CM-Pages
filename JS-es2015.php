<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JavaScript: ES2015 Work</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h3>Map: array.map()</h3>
		<code>
			var animals = [ <br>
				&nbsp;&nbsp;&nbsp;&nbsp;{ name: 'Steve', species: 'rabbit'},<br>
				&nbsp;&nbsp;&nbsp;&nbsp;{ name: 'Susan', species: 'dog'},<br>
				&nbsp;&nbsp;&nbsp;&nbsp;{ name: 'Molly', species: 'dog'},<br>
				&nbsp;&nbsp;&nbsp;&nbsp;{ name: 'Snowflake', species: 'fish'},<br>
				&nbsp;&nbsp;&nbsp;&nbsp;{ name: 'Ursula', species: 'cat'},<br>
				&nbsp;&nbsp;&nbsp;&nbsp;{ name: 'Jimmy', species: 'fish'},<br>
			] <br>
			<br>
			var names = [];<br>
			var names = animals.map(function(animal) {<br>
				return animal.name + ' is a ' + animal.species;<br>
			})<br>
			console.log(names);
		</code>
	</div>
	<script>
		var animals = [
			{ name: 'Steve', species: 'rabbit'},
			{ name: 'Susan', species: 'dog'},
			{ name: 'Molly', species: 'dog'},
			{ name: 'Snowflake', species: 'fish'},
			{ name: 'Ursula', species: 'cat'},
			{ name: 'Jimmy', species: 'fish'},
		]
		var names = [];
		var names = animals.map(function(animal) {
			return animal.name + ' is a ' + animal.species;
		})
		console.log(names);
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
