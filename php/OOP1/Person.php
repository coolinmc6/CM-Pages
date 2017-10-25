<?php 

class Person {

	public $name;
	public $age;

	// a constructor is a "magic method". PHP magic methods start with the double underscore
	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}



	public function sentence() {
		echo $this->name . " is " . $this->age;
	}

}




 ?>