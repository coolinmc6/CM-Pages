<?php 

if(isset($_POST['value'])) {
	$val = $_POST['value'];
	echo gettype($val) . "\n";

	if($val == 0) {
		echo 'It equals 0';

		if($val == '') {
			echo "\nIt's also a blank string!";
		}
	} elseif($val == 'all') {
		echo 'It equal "all"';
	}
}


 ?>