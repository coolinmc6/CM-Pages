<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Date Time</title>
</head>
<body>
	<a href="datetime.php#ex1">Using Date()</a><br>
	<a href="datetime.php#ex4">Using DateTime()</a>
	<h2 id="ex1">Using Date()</h2>
	<?php 
		$dateFormat = "D M d, Y @ g:i:s";
		$d = date("Y-M-D");
		echo $d . "<br>";
		$d += 150;
		echo "You cannot just add to date().  This is what happens when I add 150: $d <br>";
	 ?>
	 <h2 id="ex2">Using DateTime()</h2>
	 <?php 
		 $d2 = new DateTime();
		 echo $d2->format('Y-M-D');
		 echo "<br>";
		 echo $d2->format($dateFormat);
	  ?>

	  <h2 id="ex3">Date() vs. DateTime()</h2>
	  <?php 
		  
		  $d3 = date($dateFormat);
		  $d4 = new DateTime();
		  echo $d3 . "<br>";
		  echo $d4->format($dateFormat);
	   ?>
	   
	
</body>
</html>
