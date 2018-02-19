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


class DB {
	private static function connect() {
		$dsn = "mysql:host=localhost;dbname=Colin;charset=utf8";
		$user = 'root';
		$password = 'root';
		$opt = array(
		        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		    );
		$pdo = new PDO($dsn, $user, $password, $opt);

		return $pdo;
	}

	public static function query($query, $params = array()) {
		$statement = self::connect()->prepare($query);
		$statement->execute($params);
		
		if(explode(' ', $query)[0] == 'SELECT' || explode(' ', $query)[0] == 'select') {
			$data = $statement->fetchAll(PDO::FETCH_ASSOC);
			return $data;
		} 

	}



}





 ?>