<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AJAX Test</title>
</head>
<body>
	
	<input type="text" id="value">
	<button id="send">Send</button>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$('#send').on('click', function() {
			var info = {};
			info.value = $('#value').val();

			console.log(info);
			$.post('function/ajax-test.php', info, function(data) {
				console.log(data);
				$('#value').val('');
			})
		})
	</script>
</body>
</html>