<?php 

$pass1 = hash('sha256', 'Colin is the man');
$rand = rand(oid)

	function hashIt($pass) {
		return hash('sha256',$pass);
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Passwords</title>
</head>
<body>
	<?php 
		echo $pass1; 
		echo "<br>";
		echo strlen($pass1);
	?>
	<br>

	<p>Enter a test password here: <input type="text" name="password" id="password"></p>
	<p>This is its hash: <input type="text" name="hash" id="hash" readonly></p>
	
	<script>
		var pass = document.getElementById('password');
		var hash = document.getElementById('hash');
		pass.onchange = function(){
			
		}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</body>
</html>