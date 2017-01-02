<?php 

	// $host = "localhost";
	// $user = "root";
	

	// ********** HOME *********
	// $db_name = "Colin";
	// $pass = "password";

	// ********** WORK *********
	// $db_name = "Colin";
	// $pass = "password";


	// $con = new mysqli($host, $user, $pass, $db_name);

	// function formatDate($date){
	// 	return date('g:i a', strtotime($date));
	// }

	function db_connect() {
		// $dsn = "mysql:host=".$host.";dbname=".$db_name."; charset=UTF-8";
		try {
			$dsn = "mysql:host=localhost;dbname=Colin; charset=UTF8";
		$opt = array(
	        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
   	 	);
   	 	// Variables didn't seem to work for some reason...
   	 	// return new PDO($dsn,$user,$pass,$opt);

   	 	// WORK
   	 	// return new PDO($dsn,'root','password',$opt);

   	 	// HOME
   	 	return new PDO($dsn,'root','root',$opt);	
		}
		catch(PDOException $e)
		{
		echo $sql . "<br>" . $e->getMessage();
		}
		
	}



 ?>
