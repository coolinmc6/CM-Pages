<?php 

// Videos 1 - 2
include('Person.php');

$person = new Person('John', 20);

$person->sentence();

echo "<hr>";


// Videos 4: Inheritance
include('Bird.php');
include('Pigeon.php');
include('Penguin.php');

$pigeon = new Pigeon(true, 2);

echo $pigeon->getLegCount() . "<br>";

if($pigeon->canFly()) {
	echo "can fly";
}

echo "<br>";

$penguin = new Penguin(false, 2);

echo $penguin->getLegCount() . "<br>";

if($penguin->canFly()) {
	echo "can fly";
} else {
	echo "this bird can't fly";
}

echo "<hr>";
// Video 5: Scope / Visibility


echo $penguin->foo();
// echo $penguin->legCount;


echo "<hr>";

// include('Chest.php');
// include('Lock.php');

// $chest = new Chest(new Lock);
// // $chest = new Chest('test');
// $chest->close();


echo "<hr>";
echo "<h1>Calculator</h1>";

// ORIGINAL
// require_once 'classes/Calculator.php';
// require_once 'classes/OperatorInterface.php';
// require_once 'classes/Adder.php';
// require_once 'classes/Subtractor.php';
// require_once 'classes/Multiplier.php';
// require_once 'classes/Divider.php';

// AUTOLOAD 
spl_autoload_register(function($class) {
	require_once "classes/{$class}.php";	
});


$c = new Calculator;

$c->setOperation(new Adder);
$c->calculate(10,50);

$c->setOperation(new Subtractor);
$c->calculate(30);

$c->setOperation(new Multiplier);
$c->calculate(10);

$c->setOperation(new Divider);
$c->calculate(5);


echo $c->getResult();




































 ?>