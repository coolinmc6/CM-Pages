<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variable Reference | PHP Interview Questions</title>
	<link rel="stylesheet" href="../../css/index.css">
</head>
<body>
	<?php 

	$a = '1';
	$b = &$a;

	echo "These are the variables; a = " . $a . ", b = " . $b;
	echo "<hr>";
	echo '"a" has been set to 1 and "b" has been set to &$a.<br>Then I modify b by setting it 
	to <code>2$b</code><br>';


	$b = "2$b";
	echo "These are the variables; a = " . $a . ", b = " . $b . "<br>";
	echo "Notice how 'a' changes because b changed.";

	echo "<hr>";
	$a = 'Stuff';
	echo "These are the variables; a = " . $a . ", b = " . $b . "<br>";
	echo "Notice how when I change 'a', 'b' changes. The ampersand (&) appears to be work both ways.";

	?>
	
</body>
</html>