<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing XSS</title>
</head>
<body>

	<?php 

	$script = "<script>alert('this is an alert')</script>";
	echo htmlspecialchars($script);
	echo $script;

	 ?>
	
</body>
</html>