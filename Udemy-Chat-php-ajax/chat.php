<!-- chat.php -->

<?php 
	include 'db.php';
	$query = "SELECT * FROM chat ORDER BY id DESC limit 10";
	$run = $con->query($query);

	while($row = $run->fetch_array()) :
 ?>
	<div id="chat_data">
		<span style="color: blue;"><?php echo $row['name'] ?></span>
		<span style="color: black;"><?php echo $row['msg'] ?></span>
		<span style="float: right;"><?php echo formatDate($row['date']); ?></span>
	</div>
<?php endwhile; ?>