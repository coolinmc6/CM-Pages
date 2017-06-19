<?php
	setcookie("cookie[three]", "cookiethree");
	setcookie("cookie[two]", "cookietwo");
	setcookie("cookie[one]", "cookieone");

	// after the page reloads, print them out
	if (isset($_COOKIE['cookie'])) {
	    foreach ($_COOKIE['cookie'] as $name => $value) {
	        $name = htmlspecialchars($name);
	        $value = htmlspecialchars($value);
	        echo "$name : $value <br />\n";
	    }
	}
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cookies</title>
</head>
<body>

	
</body>
</html>