<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cool JavaScript Functions</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<h1>Filter, Reduce, Map & Sort</h1>
	<h2>My Problem</h2>
	<p>
	I need data that can be filtered, mapped, sorted, and reduced.
	Filter => nationality (US, Canada, Mexico)
	Reduce => Oldest/Youngest, Sum of ages, 
	Map => add currency property object (USD, CAD, MXN)
	Sort => Last Name, Age

	</p>
	<h2>List of Keys</h2>

	
	







	</div>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>

		let people = {}
		let keys = [];
		$.get('http://www.json-generator.com/api/json/get/cmhZHTAGwi?indent=2',(data) => {
			people = data;
			keys = Object.keys(people[0])
			console.log(keys);
		})


		



		
	</script>
	
</body>
</html>