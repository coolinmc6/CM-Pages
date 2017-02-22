<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Birthdays</title>
	<style>
		table, td, tr {
			border: 1px solid black;
			border-collapse: collapse;
		}
		td {
			text-align: center;
		}
		.set {
			display: inline-block;
			width: 20%;
			vertical-align: top;
		}
	</style>
</head>
<body>
	<div class="set">
		<table>
		<tr><th colspan="2">75 Birthdays</th></tr>
		<?php 
		$birthdays75 = [];
		$newCount = [];
		for ($i=0; $i < 75; $i++) { 
			array_push($birthdays75, rand(1,365));
		}
		sort($birthdays75);
		$bdayCount = array_count_values($birthdays75);
		arsort($bdayCount);
		foreach ($bdayCount as $key => $value) {
			echo "<tr><td>$key</td><td>$value</td></tr>";
		}
		
		 ?>
		 </table>
	</div>
	<div class="set">
		 <table>
		<tr><th colspan="2">25 Birthdays</th></tr>
		<?php 
		$birthdays25 = [];
		$newCount = [];
		for ($i=0; $i < 25; $i++) { 
			array_push($birthdays25, rand(1,365));
		}
		sort($birthdays25);
		$bdayCount = array_count_values($birthdays25);
		arsort($bdayCount);
		foreach ($bdayCount as $key => $value) {
			echo "<tr><td>$key</td><td>$value</td></tr>";
		}
		
		 ?>
		 </table>
	 </div>

	
</body>
</html>