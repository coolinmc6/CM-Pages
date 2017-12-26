<?php 

require_once('../functions/db.php');
if(isset($_POST['getMessages'])) {
	$senderID = $_POST['userID'];
	$lastID = $_POST['lastID'];

	echo $lastID;
	

	// $results = DB::query('SELECT * from Messages WHERE senderID = :senderID OR receiverID = :senderID 
	// 						and messageID > :lastID;', [':senderID' => $senderID, ':lastID' => $lastID]);

	// echo json_encode($results);



}

if(isset($_POST['newMessage'])) {
	$senderID = $_POST['userID'];
	$receiverID = $senderID == '1' ? 2 : 1;
	$message = $_POST['message'];

	$timestamp = date('Y-m-d h:i:sa');

	DB::query('INSERT INTO Messages(senderID, receiverID, message, dateSent) VALUES(:senderID, :receiverID, :message, :timestamp);',
			[':senderID' => $senderID, ':receiverID' => $receiverID, ':message' => $message, 
			':timestamp' => $timestamp]);

	echo $senderID . " " . $receiverID . " " . $message;
}


 ?>