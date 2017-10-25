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


