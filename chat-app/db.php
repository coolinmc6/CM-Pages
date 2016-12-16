<?php 

	$host = "localhost";
	$user = "root";
	

	// ********** HOME *********
	$db_name = "Colin";
	$pass = "password";

	// ********** WORK *********
	// $db_name = "Colin";
	// $pass = "password";


	// $con = new mysqli($host, $user, $pass, $db_name);

	// function formatDate($date){
	// 	return date('g:i a', strtotime($date));
	// }

	function db_connect() {
		// $dsn = "mysql:host=".$host.";dbname=".$db_name."; charset=UTF-8";
		$dsn = "mysql:host=localhost;dbname=Colin; charset=UTF8";
		$opt = array(
	        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
   	 	);
   	 	// return new PDO($dsn,$user,$pass,$opt);
   	 	return new PDO($dsn,'root','password',$opt);
	}



 ?>
