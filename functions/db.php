<?php 

function db_connect() {
	try {
		$dsn = 'mysql:host=localhost;dbname=Colin;charset=UTF8';
		$opt = array(
	        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		 	);
	
		return new PDO($dsn, 'root','root',$opt);

	}
	catch(PDOException $e) {
		echo "<br>" . $e->getMessage();
	}
}






 ?>