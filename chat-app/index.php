<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		#chat-window {
			height: 80vh;
			border: 1px solid black;
		}
		#chat-box {
			/*width: 90%;*/
			border: 2px solid blue;
			max-height: 500px;
			overflow-y: scroll;
		}
		.chat-row > div {
			display: inline-block;
			padding: 0.5rem;
			vertical-align: top;
		}
		.name {
			color: red;
			width: 20%;
		}
		.other {
			color: blue;
			font-weight: 700;
			font-size: 1.5rem;
		}
		.msg {
			color: black;
			width: 60%;
		}
		.date {
			/*float: right;*/
		}
		input {
			width: 40%;
		}
	</style>
</head>
<body>
	<div class="container" id="chat-window">
		<div id="chat-box">
			
		</div>
		
		<input type="text" name="msg" id="msg">
		<a href="#" class="btn btn-primary">Send Message</a><br><br>
		<input type="text" name="name" id="name-box">
		<div class="btn btn-primary" id="change-name">Change Name</div>
		
	</div>
	<?php 

	 ?>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
	
		updateChat();
		var name = 'Colin';

		$('#change-name').on('click', function(){
			name = $('#name-box').val();
			console.log(name);
		})

		$('a.btn').on('click', function(){
			var msg = $('#msg').val();
			var userName = name;
			$.post('send-msg.php',{ user : userName, msg : msg }, function(data){
				console.log('Post request: ', data);
			})
		
		})

		function updateChat() {
			$.get('send-msg.php', { getChat : 1 }, function(data) {
				$('#chat-box').html(data);
				console.log('Chat update')
			})	
		}

		// setInterval(function(){updateChat()},1000)

		
		





	
	</script>
	
</body>
</html>
