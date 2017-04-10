<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alert</title>
</head>
<body>
	<button class="console">Show Console Message</button>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		$('.console').on('click', function() {
			if(confirm('Are you sure you want to print?')) {
				console.log('print to the console')
			} else {
				console.log('You picked FALSE');	
			}
			
		})
	</script>
</body>
</html>