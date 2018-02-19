<?php 

require('../../functions/db.php');

if(isset($_POST['addTime'])) {
	$start = $_POST['start'];
	$end = $_POST['end'];
	
	// echo "inside the post: " . $start . $end;
	

	$PDO = db_connect();

	$sql = "INSERT INTO Times(startTime, endTime, testZero, timestamp)
			VALUES(:start, :endTime, :start, :start);";

	$st = $PDO->prepare($sql);

	$st->bindParam(':start', $start, PDO::PARAM_STR);
	$st->bindParam(':endTime', $end, PDO::PARAM_STR);
	$st->execute();

	echo 1;



	exit;

}

if(isset($_POST['newTime'])) {
	$startTime = $_POST['startTime'];
	$endTime = $_POST['endTime'];

	
}


 ?>