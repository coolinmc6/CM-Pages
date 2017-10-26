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

include('Chest.php');
include('Lock.php');

$chest = new Chest(new Lock);
// $chest = new Chest('test');
$chest->close();


 ?>