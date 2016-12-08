<!-- JSvideo1.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JS Video 1</title>
</head>
<body>
	<script>
		// Video 1: FILTER
		var triple = function(x) {
			return x * 3;
		}

		var waffle = triple;

		console.log(waffle(30));

		var animals = [
		{ name: 'Fluffy', species: 'rabbit'},
		{ name: 'joseph', species: 'dog'},
		{ name: 'Chris', species: 'dog'},
		{ name: 'Casey', species: 'dog'},
		{ name: 'Snowball', species: 'cat'},
		{ name: 'Bruce', species: 'cat'},
		{ name: 'Nemo', species: 'fish'},
		{ name: 'Dorie', species: 'fish'}
		];

		var dogs = animals.filter(function(animal) {
			return animal.species === 'dog'
		})
		console.log(dogs);

		var isDog = function(animal) {
			return animal.species === 'dog'
		}
		var dogs2 = animals.filter(isDog);
		console.log(dogs2);

		// Video 2: MAP
		// filter expected a true false as to whether it should included in the new array
		// map expects how it will be changed

		var animals2 = [
		{ name: 'Fluffy', species: 'rabbit'},
		{ name: 'joseph', species: 'dog'},
		{ name: 'Chris', species: 'dog'},
		{ name: 'Casey', species: 'dog'},
		{ name: 'Snowball', species: 'cat'},
		{ name: 'Bruce', species: 'cat'},
		{ name: 'Nemo', species: 'fish'},
		{ name: 'Dorie', species: 'fish'}
		];

		var names = animals2.map(function(animal) {

			return animal.name + ' is a ' + animal.species;
		})
		console.log(names);

		// Reduce

		var orders = [
		{ amount: 250},
		{ amount: 400},
		{ amount: 100},
		{ amount: 325},
		{ amount: 150}
		];

		var totalAmount = orders.reduce(function(sum, order){
			console.log("hello", sum, order)
			return sum + order.amount
		}, 0)

		// var totalAmount = 0;
		// for (var i = 0; i < orders.length; i++) {
		// 	totalAmount += orders[i].amount;
		// }
		console.log("Total amount is " + totalAmount)








	</script>
	<ul>
		<li>Video 1: Filter ==> <a href=""></a> </li>
		<li>Video 2</li>
		<li>Video 3</li>
		<li>Video 4</li>
		<li>Video 2</li>
		<li>Video 2</li>
		<li>Video 2</li>
		<li>Video 2</li>
	</ul>

	
</body>
</html>
