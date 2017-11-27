 <?php 
 function generateName() {
 	$firstNames = ['Noah', 'Liam', 'Mason', 'Jacob', 'William', 'Ethan', 'James', 'Alexander', 'Michael', 
 				'Benjamin', 'Elijah', 'Daniel', 'Aiden', 'Logan', 'Matthew', 'Lucas', 'Jackson', 
 				'David', 'Oliver', 'Jayden', 'Joseph', 'Gabriel', 'Samuel', 'Carter', 'Anthony', 'John', 
 				'Dylan', 'Luke', 'Henry', 'Andrew', 'Isaac', 'Christopher', 'Joshua', 'Wyatt', 'Sebastian', 
 				'Owen', 'Caleb', 'Nathan', 'Ryan', 'Jack', 'Hunter', 'Levi', 'Christian', 'Jaxon', 'Julian', 
 				'Landon', 'Grayson', 'Jonathan', 'Isaiah', 'Charles', 'Thomas', 'Aaron', 'Eli', 'Connor', 
 				'Jeremiah', 'Cameron', 'Josiah', 'Adrian', 'Colton', 'Jordan', 'Brayden', 'Nicholas', 
 				'Robert', 'Angel', 'Hudson', 'Lincoln', 'Evan', 'Dominic', 'Austin', 'Gavin', 'Nolan', 
 				'Parker', 'Adam', 'Chase', 'Jace', 'Ian', 'Cooper', 'Easton', 'Kevin', 'Jose', 'Tyler', 
 				'Brandon', 'Asher', 'Jaxson', 'Mateo', 'Jason', 'Ayden', 'Zachary', 'Carson', 'Xavier', 
 				'Leo', 'Ezra', 'Bentley', 'Sawyer', 'Kayden', 'Blake', 'Nathaniel'];

 	$lastNames = ['Smith', 'Johnson','Williams','Jones','Brown','Davis','Miller','Wilson','Moore',
 					'Taylor','Anderson','Thomas','Jackson','White','Harris','Martin','Thompson',
 					'Garcia','Martinez','Robinson','Clark','Rodriguez','Lewis','Lee','Walker','Hall','Allen',
 					'Young','Hernandez','King','Wright','Lopez','Hill','Scott','Green','Adams','Baker',
 					'Gonzalez','Nelson','Carter','Mitchell','Perez','Roberts','Turner','Phillips',
 					'Campbell','Parker','Evans','Edwards','Collins','Stewart','Sanchez','Morris','Rogers',
 					'Reed','Cook'];

 	$first = $firstNames[array_rand($firstNames)];
 	$last = $lastNames[array_rand($lastNames)];

 	return $first . " " . $last;
 }

if(isset($_GET['names'])) {

	echo generateName();
	return;
}

  ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Generators</title>
 </head>
 <body>
 	<button id="generate">Generate Name</button>
 	<div class="names">
 		
 	</div>
	
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$('#generate').on('click', function() {
			$.get('generators', {names: 1}, function(data) {
				var d = document.createElement('div');
				$(d).append(data);
				$('.names').append(d);
			})
		})
		
	</script>

 	
 </body>
 </html>