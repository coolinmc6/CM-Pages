<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Which</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<input id="input" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		$('#input').on('keypress',function(e) {
			console.log(e.which);
			var searchterm = $('#input').val();
	    	searchterm = searchterm.replace('&', ' and ');

			searchterm = encodeURIComponent(searchterm);
			console.log (searchterm);
		})
	</script>
</body>
</html>