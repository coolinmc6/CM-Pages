# PHP OOP Notes

## OOP Basics

- Defining a class

```php
class Person {

	public $name;
	public $age;

	public function sentence() {
		echo $this->name . " is " . $this->age;
	}

}
```

- you can include the class (which should be in a different file) so that you can use it
- to instantiate a new Person object:

```php
$person = new Person;
```

- Now, the `$person` object can be manipulated.
- You can change the person's name and age by:

```php
$person->name = 'John';
$person->age = 20;
```

- Classes can also have methods. Here is how you call the Person method:

```php
$person->sentence();
```

## Constructors

- Constructors allow us to remove the extra code below

```php
$person->name = 'John';
$person->age = 20;
```

- ...and replace it with something like this:

```php
$person = new Person('John', 20);
```

- This is how you build a constructor:

```php
public function __construct($name, $age) {
	$this->name = $name;
	$this->age = $age;
}
```
  - the variables `$name` and `$age` were declared above this constructor

## Inheritance

- Inheritance means that every property and method is extended from the class that is inherited. Look at the
code below and see how both Pigeon and Penguin get all the same properties (read: variables) and methods
(read: functions) as Bird despite being essentially blank.

```php
// Bird.php
class Bird {

	public $canFly;
	public $legCount;

	public function __construct($canFly, $legCount) {
		$this->canFly = $canFly;
		$this->legCount = $legCount;
	}

	public function canFly() {
		return $this->canFly;
	}


	public function getLegCount() {
		return $this->legCount;
	}
}

// Pigeon.php
class Pigeon extends Bird {

}

// Penguin.php
class Penguin extends Bird {

}
```

- ...but both can use all the same functions/properties:

```php
$pigeon = new Pigeon(true, 2);

echo $pigeon->getLegCount() . "<br>";
```

## Visibility

- There are three scopes: public, protected, private. Here are some basic definitions / notes:
  - public -> that variable or function can be accessed from anywhere, or from other classes or
  instances of the object.
  - protected -> visible to all classes that extend its current class
  - private -> only visible in its own class
- Look at the code below for an interesting example:

```php
// Penguin.php
class Penguin extends Bird {
	
	public function foo() {
		echo $this->legCount;
	}
}

// Bird.php
class Bird {

	protected $canFly;
	protected $legCount;
	
	// MORE CODE
}

// index.php
echo $penguin->foo();  // 2
echo $penguin->legCount;  // Fatal error
```

  - so Penguin extends Bird and has a public function, foo(), that echo's the legCount, a protected variable
  - I also try to echo the legCount directly using `$penguin->legCount`.
  - The first works, the second one fails
  - The first one calls a public function 
  - The second one is trying to directly use an inherited, protected property, legCount.
  - Notice that both are essentially trying to do the same thing. The first one, however, is a public function
  that has access/visibility to the protected variable `$legCount`.
  - There are definitely some more examples I'd like to see but this is a great example

Start here: [https://youtu.be/pDxVRtPXpqY](https://youtu.be/pDxVRtPXpqY)

## Dependency Injection


## Interfaces
- Countable
- JsonSerializable
- an interface is essentially a blueprint for a class

## Magic Methods

```php
__set()
__get()
__call()
__toString()
```

- play around with and learn the magic methods

## Abstract Methods



## Static
- you should not rely on static in your code
- it means that you can call the method without instantiating a new object


## Method Chaining


## Building the Calculator









