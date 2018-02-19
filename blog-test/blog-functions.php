<?php 
require('../functions/db.php');

if(isset($_POST['addPost'])) {

	$content = $_POST['content'];
	date_default_timezone_set('America/New_York');
	$timestamp = date('Y-m-d h:i:sa');
	try {
		DB::query('INSERT INTO BlogPosts(PostDate, Content) VALUES(:timestamp, :content);', [':timestamp' =>$timestamp, ':content' => $content]);
		echo 1;
		exit;	
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	

}


 ?>