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
		console.log("Total amount is " + totalAmount);

		// Video 4: Reduce Advanced - Part 4 o fFunctional Programming in Javascript
		// I didn't get my version to work as he did it...I think I need babel

		// import fs from 'fs';
		// var output = fs.readFileSync('data.txt');
		// console.log('output', output);
		var text = 'mark johnson	waffle iron	80	2\
					mark johnson	blender	200	2\
					mark johnson	pot	70	4\
					Nikita Smith	waffle iron	80	1\
					Nikita Smith	blender	190	3\
					Nikita Smith	knife	10	4'
		var output = text
			.trim()
			.split('\n')
			.map(function(line){
				return line.split('\t')
			})
			.reduce(function(customers, line){
				customers[line[0]] = []
				// customers[line[0]] = customers[line[0]] || []
				// customers[line[0]].push({
				// 	name: line[1],
				// 	price: line[2],
				// 	quantity: line[3]
				// })
				return customers
			}, {})
		console.log('output', JSON.stringify(output, null, 2));


		// Video 5: Closures - Part 5 of Functional Programming in JavaScript
		/*
		- greetMe() is a closure because it can use the variable 'me' which is defined
		outside of the function
		- check Mozilla's closures page



		*/
		var me = 'Bruce Wayne';
		function greetMe() {
			console.log('Hello, ' + me + '!')
		}
		greetMe();

		function sendRequest() {
			var requestID = '123'
			$.ajax({
				url: '/myUrl',
				success: function(response){
					alert('Request ' + requestID + ' returned');
				}
			});
		}

		// Video 6: Currying - Part 6 of Functional Programming in JavaScript
		// currying is when it doesn't take all of its arguments at first
		
		// Video 7: Recursion
		/*
		- Recursion is when a function calls itself until it doesn't


		*/
		var countDownFrom = function(num){

		}

		countDownFrom(10)








	</script>
	<ul>
		<li>Video 1: Filter ==> <a href=""></a> </li>
		<li>Video 2: Map ==> </li>
		<li>Video 3: Reduce ==> </li>
		<li>Video 4: Reduce pt 2 ==></li>
		<li>Video 5: Closures</li>
		<li>Video 6: Currying</li>
		<li>Video 7: Recursion</li>
		<li>Video 8: </li>
	</ul>

	
</body>
</html>
