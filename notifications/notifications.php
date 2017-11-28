<?php 

if(isset($_POST['add'])) {

	require('../functions/db.php');
	$PDO = db_connect();

	$user_id = 1;
	$read = 0;

	$types = ["job application", "message"];

	$type = $types[array_rand($types)];
	$timestamp = 0;

	$sql = "INSERT INTO Notifications(user_id, nType, wasRead, readDate) VALUES(:user_id, :type, :read, :readDate);";
	$st = $PDO->prepare($sql);

	$st->bindParam(':user_id', $user_id, PDO::PARAM_INT);
	$st->bindParam(':type', $type, PDO::PARAM_STR);
	$st->bindParam(':read', $read, PDO::PARAM_INT);
	$st->bindParam(':readDate', $timestamp, PDO::PARAM_STR);

	$st->execute();


	echo 1;
}


if(isset($_POST['updates'])) {

	require('../functions/db.php');
	$PDO = db_connect();

	$user_id = 1;

	$sql = "SELECT * FROM Notifications WHERE user_id = :user_id AND wasRead = 0;";
	$st = $PDO->prepare($sql);

	$st->bindParam(':user_id', $user_id, PDO::PARAM_INT);
	$st->execute();

	$results = $st->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($results);
}


if(isset($_POST['getOldNotifications'])) {
	require('../functions/db.php');
	$PDO = db_connect();

	$user_id = 1;
	$sql = "SELECT * FROM Notifications WHERE user_id = :user_id AND wasRead = 1 order by id DESC
	limit 10";
	$st = $PDO->prepare($sql);
	$st->bindParam(':user_id', $user_id, PDO::PARAM_INT);
	$st->execute();

	$results = $st->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($results);
}


if(isset($_POST['markRead'])) {

	require('../functions/db.php');
	$PDO = db_connect();

	$user_id = 1;
	$sql = "UPDATE Notifications SET wasRead = 1 WHERE user_id = :user_id";

	$st = $PDO->prepare($sql);

	$st->bindParam(':user_id', $user_id, PDO::PARAM_INT);
	$st->execute();
	echo 1;

}


 ?>