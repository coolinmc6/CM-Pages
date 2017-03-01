<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>babbles</title>
	<?php include_once('head.php'); ?>
</head>
<body>
	<?php include_once('header.php'); ?>

	<div class="babble">
		<div class="babble-user-row">
			<img src="https://randomuser.me/api/portraits/men/59.jpg" alt="" class="user-pic">
			<div class="user-name">
				User Name <br>
				<span class="user-handle">@userhandle62</span>
			</div>
			
			<div class="follow-user">
				<span class="glyphicon glyphicon-share-alt"></span>
			</div>
		</div>
		<div class="babble-text-row">
			<div class="babble-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
			Recusandae accusamus consequuntur dolore aliquam repudiandae? Illum!</div>
			<div class="babble-time">6:00pm - 01 Mar 17</div>
		</div>
		<div class="babble-action-row">
			<div class="babble-like">
				<span class="glyphicon glyphicon-heart"></span>
			</div>
		</div>
		
	</div>



	<?php include_once('footer.php'); ?>
	<script>
		function randomDude() {
			var number = Math.floor(Math.random()*50);
			var pic = 'https://randomuser.me/api/portraits/men/' + number + '.jpg'
			$('.user-pic').attr('src',pic)
		}
		randomDude();
	</script>
</body>
</html>