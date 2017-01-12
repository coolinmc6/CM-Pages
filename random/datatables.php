<?php include_once('../functions/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Food List Test</title>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<?php 

	$PDO = db_connect();
	$statement = $PDO->prepare('select * from FoodLog;');
	$statement->execute();

	$results = $statement->fetchAll(PDO::FETCH_ASSOC);


	 ?>
</head>
<body>
	
	<div class="container">
		<h1>Food List Sortable</h1>
		<table id="foodList" class="table table-striped table-bordered">
		    <thead>
		        <tr>
		            <th>Food ID</th>
		            <th>name</th>
		            <th>Category</th>
		            <th>Calories</th>
		            <th>Timestamp</th>
		            <th>Rank</th>
		            <th>Update</th>
		            <th>Move Rank</th>
		        </tr>
		    </thead>
		    <tbody>
		       	<?php 
		       		foreach ($results as $foodLog) {
		       			echo "<tr>";
		       			echo "<td>" . $foodLog['food_id'] . "</td>";
		       			echo "<td>" . $foodLog['food_Name'] . "</td>";
		       			echo "<td>" . $foodLog['food_Category'] . "</td>";
		       			echo "<td>" . $foodLog['food_Cals'] . "</td>";
		       			echo "<td>" . $foodLog['food_Timestamp'] . "</td>";
		       			echo "<td><input type='text' value='" . $foodLog['food_Rank'] . "'></td>";
		       			echo "<td><a>Update</a></td>";
		       			echo "<td><span class='glyphicon glyphicon-triangle-top'></span>
		       			<span class='glyphicon glyphicon-triangle-bottom'></span></td>";
		       			echo "</tr>";
		       		}
	        	?>
		    </tbody>
		</table>
		<div class="alert alert-success" role="alert">Update Added</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>