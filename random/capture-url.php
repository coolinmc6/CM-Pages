<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Capture URL</title>
</head>
<body>
	Show query string: <a href="capture-url.php?id=<?php $id = rand(); echo $id; ?>"><?php echo "ID #" . $id ?></a><br>
	<?php 

	$query = $_SERVER['QUERY_STRING'];
	echo "Query string: " . $query . "<br>";
	$info = substr($query,3);
	echo "Query: " . $info;

	echo "<br><br>";
	// print_r($_SERVER);
	echo "<h2>\$_SERVER variables</h2>";
	foreach ($_SERVER as $key => $value) {
		if(gettype($value) == 'string') {
			echo $key . ": " . $value . "<br>";	
		}
		
	}

	echo "<br><br>";
	echo "<h2>Get All Headers</h2>";
	foreach (getallheaders() as $name => $value) {
	    echo "$name: $value\n" . "<br>";
	}






	 ?>	
	
</body>
</html>