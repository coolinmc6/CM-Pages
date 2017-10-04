<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sorting Arrays</title>
	
	<style>
		table, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		td {
			padding: 0.25rem;
			text-align: center;
		}
	</style>
</head>
<body>
	<div>
		You will have an array of unknown length called milk passed into a function.  The array will look like this:

		$milk[] {
		    price => 'xx.xx',
		    store_name => 'some store name',
		    distance => 'xx.x' in miles
		}

		From the array, output:
		<ul>
			<li>the 3 store names and prices with the lowest milk prices within 10 miles of my house</li>
			<li>the 3 store names and prices of the closest stores to my house</li>
		</ul>
		
		This is the desired output:
		<code>
			<br>
			[blank line] <br>
			Cheapest <br>
			store name [tab] distance <br>
			store name [tab] distance <br>
			store name [tab] distance <br>
			[blank line] <br>
			[blank line] <br>
			Closest <br>
			store name [tab] price <br>
			store name [tab] price <br>
			store name [tab] price <br>
			[blank line]	
		</code>
		
	</div>
	<br>
	<div>
		<?php 

		function createMilkArray() {
			$array = [];
			$names = ['Alicia', 'Alex', 'Brenda', 'Bob', 'Caroline', 'Colin', 'Dara', 'David', 'Elizabeth', 'Evan', 'Francine', 'Frankie'];
			$stores = ['Milk Mart', 'Market', 'Grocery', 'General Store', 'Foodery', 'Shop', 'Emporium', 'Gas Station', 'Store', 'Bonanza', 'Happy Place', 'Sad Place', 'House of Stuff to Eat', 'Unnamed'];
			$price = rand(0,4) + '.' + rand(0,99)/100;
			$array['price'] = $price;
			$array['store_name'] = $names[rand(0,count($names)-1)] . "'s " . $stores[rand(0,count($stores)-1)];
			$array['distance'] = (float)(rand(0,20) + (rand(0,99)/100));
			return $array;
		}

		function printArray($arr, $type) {
			$c = 1;
			$count = 0;
			echo "<br>";
			if($type == 'price') {
				echo "Cheapest<br>";
				foreach ($arr as $row) {
					if($row['distance'] < 10 && $count < 3) {
						echo $row['store_name'] . "\t" . $row['distance'] . " miles<br>";
						$count++;
					}
				}
				
			} elseif($type == 'distance') {
				echo "Closest<br>";
				for ($i=0; $i < 3; $i++) { 
					echo $arr[$i]['store_name'] . "\t $" . $arr[$i]['price'] . "<br>";
				}

			} else {
				foreach ($arr as $row) {
					// echo $c . ' - ' . $row['store_name'] . ' -- $' . $row['price'] . ' -- ' . $row['distance'] ." miles<br>";
					$dist = $row['distance'] > 10 ? 'TOO FAR' : '';
					echo "<tr>";
					echo "<td>" . $c . "</td>";
					echo "<td>" . $row['store_name'] . "</td>";
					echo "<td>$" . $row['price'] . "</td>";
					echo "<td>" . $row['distance'] . " miles</td>";
					echo "<td>$dist</td>";
					echo "</tr>";
					$c++;
				}	
			}
			
		}

		function printMilkFacts($arr) {

			echo "<br>Cheapest<br>";

			$price = [];
			foreach ($arr as $key => $value) {
				$price[$key] = $value['price'];
			}
			array_multisort($price, SORT_ASC, $arr);
			$count = 0;
			foreach ($arr as $row) {
				if($row['distance'] < 10 && $count < 3) {
					echo $row['store_name'] . "\t" . $row['distance'] . " miles<br>";
					$count++;
				}
			}
			echo "<br>Closest</br>";
			$distance = [];
			foreach($arr as $key => $value) {
				$distance[$key] = $value['distance'];
			}
			array_multisort($distance, SORT_ASC, $arr);
			for ($i=0; $i < 3; $i++) { 
				echo $arr[$i]['store_name'] . "\t $" . $arr[$i]['price'] . "<br>";
			}
			echo "<br>";
		}

		// Stores
		echo "Initial Array of Stores<br>";
		$milkStores = [];
		for ($i=0; $i < 10; $i++) { 
			$arr = createMilkArray();
			array_push($milkStores, $arr);
		}
		echo "<table>";
		printArray($milkStores, 'test');
		echo "</table>";

		echo "<br><br>";

		echo "Finished Problem:<br>";
		echo "<strong>Version 1</strong><br>";
		$price = [];
		foreach ($milkStores as $key => $value) {
			$price[$key] = $value['price'];
		}
		array_multisort($price, SORT_ASC, $milkStores);
		
		
		printArray($milkStores, 'price');

		$distance = [];
		foreach($milkStores as $key => $value) {
			$distance[$key] = $value['distance'];
		}
		array_multisort($distance, SORT_ASC, $milkStores);

		
		printArray($milkStores, 'distance');

		echo "<br><strong>Version 2: Final</strong><br>";

		printMilkFacts($milkStores);

				



		?>	
	



	</div>
	<hr>

	<h3>Initial List of Stores</h3>
	<table>
	<?php 
		$newMilkStores = [];
		for ($i=0; $i < 20; $i++) { 
			$arr = createMilkArray();
			array_push($newMilkStores, $arr);
		}
		printArray($newMilkStores, 'other');
	 ?>
 	</table>

 	<?php 
 	printMilkFacts($newMilkStores);
 	 ?>


	
</body>
</html>