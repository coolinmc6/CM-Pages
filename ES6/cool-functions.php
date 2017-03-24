<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cool JavaScript Functions</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		code {
			display: block;
			white-space: pre-wrap
		}
		.key, .tag, .gender {
			display: inline-block;
			padding: 0.3rem 1rem;
			border: 1px solid black;
			color: #46494C;
			background-color: #B6E4EF;
			margin: 0.25rem;
			border-radius: 4px;
			font-size: 1.5rem;
		}
		.tag {
			background-color: #8FC0A9;
		}
		#age-sort, #name-sort {
			width: 48%;
			display: inline-block;
			
		}
		th {
			width: 25%;
		}
		td, th {
			text-align: center;
		}
		.gender {
			background-color: #91D6F2;
		}
		.female {
			background-color: #E5989B;
		}
	</style>
</head>
<body>
	<div class="container">
	<h1>Filter, Reduce, Map & Sort</h1>
	<h2>My Problem</h2>
	<p>
	I need data that can be filtered, mapped, sorted, and reduced.
	Filter => gender
	Reduce => Oldest/Youngest, Sum of ages, 
	Map => add currency property object (USD, CAD, MXN)
	Sort => Last Name, Age

	</p>

	<h2>List of Keys</h2>
	<code>
		var keys = Object.keys(people[0])
	</code>
	<div>
		<h3>Here are the list of keys: </h3>
		<div id="keys"></div>
	</div>
	<h2>List of People Sorted by Age</h2>
	<ul>
		<li>Notice how the sorting works => a - b is asc, b - a is desc</li>
		<li>With numbers, sorting from high to low is easy because it's already a number.  For strings, we need
		to compare the strings and then if: <code>a.name &lt; b.name</code> then return -1, if: <code>a.name &gt; b.name</code> 
		return 1, and then if the same return 0.  This is a function that my sort function is using to determine how 
		to sort the people.</li>
		<li>Adding the .slice() prevents altering the originally array.</li>
	</ul>
	<code>
		# Sorting by ages
		var ages = people.slice().sort((a,b) => {
			return b.age - a.age
		})
		# low to high
		return a.age - b.age
		# high to low
		return b.age - a.age

		# Sorting by names, alphabetically
		var names = people.slice().sort((a,b) => {
			if(a.name.toUpperCase() < b.name.toUpperCase()) return -1;
			if(a.name.toUpperCase() > b.name.toUpperCase()) return 1;
			return 0;
		})

	</code>
	<div id="sorted-tables">
		<table id="age-sort" class="table table-hover">
			<tr>
				<th>Name</th>
				<th>Age</th>
			</tr>
			
		</table>
		<table id="name-sort" class="table table-hover">
			<tr>
				<th>Name</th>
				<th>Random Info</th>
			</tr>
			
			
		</table>	
	</div>


	<h2>Unique Tags</h2>
	<div id="tags"></div>

	<h2>Genders</h2>
	<div id="males"></div>
	<div id="females"></div>

	<h2>Friends</h2>
	<p>List of all friends</p>


	

	
	







	</div>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function() {
			let people = {}
			let keys = [];	
			$.get('http://www.json-generator.com/api/json/get/cmhZHTAGwi?indent=2',(data) => {
				people = data;

				console.log(people);

				// Grab the Keys
				var keys = Object.keys(people[0])
				
				keys.map((key) => {
					var s = document.createElement('span')
					$(s).addClass('key');
					$(s).text(key);
					$('#keys').append(s);
					
				});

				// Sort by Ages & Names
				var ages = people.slice().sort((a,b) => {
					
					return b.age - a.age
				})

				var names = people.slice().sort((a,b) => {
					if(a.name.toUpperCase() < b.name.toUpperCase()) return -1;
					if(a.name.toUpperCase() > b.name.toUpperCase()) return 1;
					return 0;
				})
				
				// Print Ages & Names
				let ageSum2 = 0;
				ages.map((person) => {
					let r2 = document.createElement('tr');
					let td3 = document.createElement('td');
					$(td3).text(person.name)
					let td4 = document.createElement('td');
					$(td4).text(person.age)
					ageSum2 += person.age
					$(r2).append(td3, td4);
					$('#age-sort').append(r2)
				})
				

				names.map((person) => {
					let r = document.createElement('tr');
					let td1 = document.createElement('td');
					$(td1).text(person.name)
					let td2 = document.createElement('td');
					$(td2).text(person.gender)
					$(r).append(td1, td2);
					$('#name-sort').append(r)
				})

				let sum = 0;
				let ageSum = people.reduce((all, item) => {
					sum += item.age;
					return {sum: sum}
				}, {})

				console.log(ageSum.sum);
				console.log(ageSum2);

				let tags = [];
				var allTags = people.map((person) => {
					person.tags.map((tag) => {
						if (tags.indexOf(tag) < 0) {
							var s = document.createElement('span')
							$(s).addClass('tag');
							$(s).text(tag);
							$('#tags').append(s);
							return tags.push(tag)
						}
					})
				})

				let males = people.filter((person) => {
					if (person.gender === "male") {
						var s = document.createElement('span')
						$(s).addClass('gender');
						$(s).text(person.name);
						$('#males').append(s);	
					}
					
					return person.gender === "male"
				})

				console.log(males);

				let females = people.filter((person) => {
					if (person.gender === "female") {
						var s = document.createElement('span')
						$(s).addClass('gender female');
						$(s).text(person.name);
						$('#females').append(s);	
					}
					
					return person.gender === "female"
				})

				console.log(females);

				let friends = [];
				

				


				

				


				
				
				
			}) /* End of get request */








		})
		
		


		



		
	</script>
	
</body>
</html>