<?php 

if (isset($_POST['serverVariable'])){
	echo "<br><strong>";
	print_r($_POST);
	echo "</strong>";
	echo "<br>";
	echo "The array above is just a print_r() of the POST request.";
	echo "<br>'serverVariable' is the parameter you posted...which is what you typed in the search bar";
	echo "<br>";
	echo "As you can see, you can return ANYTHING you want.  You can POST 100 parameters and 
		receive nothing or POST 1 thing and receive a TON of stuff.";
	echo "<br>";
	echo "Also notice how you also passed along a variable that you did not choose to submit.
	Here is your other variable: " . $_POST['nonInput'];
}
 ?>