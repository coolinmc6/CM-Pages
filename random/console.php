<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
</head>
<body>
	<form action="">
		<input type="text" name="test1" id="test1">
		<input type="submit" value="Submit">
	</form>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		$( "form" ).submit(function( event ) {
		  event.preventDefault();
		  a = $('#test1').val();
		  a;
		});
		
	</script>
</body>
</html>
