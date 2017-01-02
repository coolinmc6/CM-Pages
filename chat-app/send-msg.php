<?php 
include_once('db.php');

if (isset($_POST['msg'])) {
	$PDO = db_connect();

	$msg = $_POST['msg'];
	$userName = $_POST['user'];
	$date = date('Y:m:d h:i:sa');

	$sql = "insert into ajaxChat (userName,msg, date) values(:userName, :msg, :date);";

	$statement = $PDO->prepare($sql);

	$statement->bindParam(':userName', $userName, PDO::PARAM_STR);
	$statement->bindParam(':msg', $msg, PDO::PARAM_STR);
	$statement->bindParam(':date', $date, PDO::PARAM_STR);

	$statement->execute();	
	// echo "success!";
}

if (isset($_GET['getChat'])){
	$PDO = db_connect();

	$sql = "select * from ajaxChat order by msgID DESC limit 100;";

	$statement = $PDO->prepare($sql);
	$statement->execute();

	$chatMessages = $statement->fetchAll(PDO::FETCH_ASSOC);
	$chatMessages = array_reverse($chatMessages);
	// print_r($chatMessages);

	foreach ($chatMessages as $chat) {

		// if ($userName == $chat['userName']) {
		if ($chat['userName'] == 'Colin') {
			$class = 'name';
			echo $chat['userName'];
		} else {
			$class = 'other';
		}
		$class = 'name';
		echo "<div class='chat-row'>";
		echo "<div class='".$class."'>" . $chat['userName'] . "</div>";
		echo "<div class='msg'>" . $chat['msg'] . "</div>";
		echo "<div class='date'>" . $chat['date'] . "</div>";
		echo "</div>";

	}

}












 ?>