<?php 
require('../functions/db.php');
if(isset($_GET['gameID'])) {
	$gameID = $_GET['gameID'];

	// try {
	// 	$PDO = db_connect();

	// } catch (Exception $e) {
		
	// }
} else {
	header('Location: index.php');
}






 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to the Game</title>
	<div class="all-players">
		
	</div>
</head>
<body>
	
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		var gameID = <?php echo "'$gameID'"; ?>;
		var URL = 'game-functions.php';
		setInterval(function() {
			var info = {
				gameID: gameID
			}
			// post to game functions to see who is in the room
			$.post(URL, info, function(data) {
				console.log(data);
				var obj = JSON.parse(data);
				var arr = Object.keys(obj).map(function(row) {
					return obj[row];
				})

				$('.all-players').empty();
				arr.map(function(row) {
					var d = document.createElement('div');
					$(d).html(row.player)
					$('.all-players').append(d);
				})
			})
			// 
		}, 1000)

	</script>
</body>
</html>