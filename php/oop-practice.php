<?php 

class ParentObject {



}

class User {

	public $age;
	public $name;
	private $password;
	public $stuff;
	public static $parent = "Steve";

	public function __construct($age, $name, $password) {
		$this->age = $age;
		$this->name = $name;
		$this->setPassword($password);

	}


	public function setPassword($string) {
		$this->password = password_hash($string, PASSWORD_BCRYPT);
	}

	public static function printUser() {
		echo "<br>Hey there!! My name is whatever!";
	}

	public function userSpeak() {
		echo "<br>Hey there!! My name {$this->name} and I am {$this->age} years old!";
	}

}


$john = new User(16, 'John Smith', 'my password');

$john->age = 16;
$john->name = "John Smith";

$john->userSpeak();

echo "<br>";

echo User::$parent;

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>PHP OOP</title>
 </head>
 <body>
 	<pre>
 		<?php 
 			print_r($john); 

		?>
 	</pre>
 	
 </body>
 </html>