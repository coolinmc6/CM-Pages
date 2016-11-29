<?php 

$servername = "localhost";
$username = "root";
$password = "password";
$databaseName = "Colin";

try {			
	$conn = new PDO("mysql:host=$servername;dbname=$databaseName", $username, $password);			
	// set the PDO error mode to exception			
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
				
}			
catch(PDOException $e) {			
	echo $sql . "<br>" . $e->getMessage();			
}			

$sql = "select * from Assignments;";

$stmt = $conn->prepare($sql);
$stmt->execute();

$assignments = $stmt->fetchALL(PDO::FETCH_ASSOC);
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Percentage</title>
</head>
	<style>
		tr {
			background-color: #ccc;
		}
		.red {
			/*color: red;*/
			font-weight: 800;
			background-color: red;
		}
		.yellow {
			/*color: yellow;*/
			font-weight: 800;
			background-color: yellow;
		}
		.green {
			/*color: green;*/
			font-weight: 800;
			background-color: green;
		}
		th, td {
			text-align: center;
			padding: 0.25rem 0.75rem;
		}
		
	</style>
<body>
	<table>
		<tr>
			<th>Assignment</th>	
			<th>Completion Unformatted</th>
			<th>Completion Percentage</th>
			<th>Class</th>
		</tr>
		
	
		<?php 
			foreach ($assignments as $a ) {
				if ($a['comp_percent'] < 0.4) {
					$class = "red";
				} else if ($a['comp_percent'] < 0.75) {
					$class = "yellow";
				} else {
					$class = "green";
				}
				echo "<tr class='$class'>";
				echo "<td>" . $a['assignment'] . "</td>";
				echo "<td>" . $a['comp_percent'] . "</td>";
				echo "<td>" . sprintf("%.2f%%", $a['comp_percent']*100) . "</td>";
				// sprintf("%.2f%%", $x * 100)
				echo "<td class='$class'>$class</td>";
				echo "<tr>";
			}
		 ?>
	 </table>
	
</body>
</html>
