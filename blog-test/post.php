<?php 
require('../functions/db.php');
if(isset($_GET['id'])) {
	$blog = DB::query('SELECT * FROM BlogPosts WHERE id = :id', [':id' => $_GET['id']])[0];

}





 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 </head>
 <body>
 	<?php include_once('includes/blog-nav.php'); ?>
 	<?php echo $blog['Content']; ?>
 </body>
 </html>