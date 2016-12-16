<?php 

	$host = "localhost";
	$user = "root";
	

	// ********** HOME *********
	$db_name = "Colin";
	$pass = "password";

	// ********** WORK *********
	// $db_name = "Colin";
	// $pass = "password";


	$con = new mysqli($host, $user, $pass, $db_name);

	function formatDate($date){
		return date('g:i a', strtotime($date));
	}



 ?>
