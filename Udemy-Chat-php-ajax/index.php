<!-- index.php -->
<?php 
	include 'db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Udemy: PHP - AJAX chat App</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="container">
		<div id="chat_box">
		<?php 
			$query = "SELECT * FROM chat ORDER BY id DESC";
			$run = $con->query($query);

			while($row = $run->fetch_array()) :
		 ?>
			<div id="chat_data">
				<span style="color: blue;"><?php echo $row['name'] ?></span>
				<span style="color: black;"><?php echo $row['msg'] ?></span>
				<span style="float: right;"><?php echo $row['date'] ?></span>
			</div>
		<?php endwhile; ?>
		</div>
		<form action="index.php" method="post">
			<input type="text" name="name" placeholder="enter name"/>
			<textarea name="enter_message" placeholder="enter message"></textarea>
			<input type="submit" name="submit" value="Send it"/>
		</form>
	</div>
	
</body>
</html>