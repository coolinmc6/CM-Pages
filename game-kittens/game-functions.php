<?php 
require('../functions/db.php');
if(isset($_POST['gameID'])) {
	
	$gameID = $_POST['gameID'];
	try {
		$PDO = db_connect();
		$st = $PDO->prepare('SELECT * FROM GamePlayers WHERE gameID = :gameID;');
		$st->execute([':gameID' => $gameID]);
		$results = $st->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($results);
		exit;
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}


 ?>