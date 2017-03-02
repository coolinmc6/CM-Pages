<?php 

if(isset($_POST['password'])){
	$getPass = $_POST['password'];
	$new = password_hash($getPass, PASSWORD_BCRYPT);
	echo $new;
	// echo 'hello';
	exit;
} else {
	$getPass = 'not filled';
}

$pass1 = hash('sha256', 'Colin is the man');


	function hashIt($pass) {
		return hash('sha256',$pass);
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Passwords</title>
	<style>
		input {
			font-family: Monospace;	
		}
		#hash, td {
			font-family: monospace;
		}
		table {
			margin-top: 1rem;
			width: 80%
			margin: 0 auto;
		}
		th {
			width: 50%;
			text-align: center;
		}
		td:nth-child(1) {
			text-align: center;
			width: 25%;
		}
		
	</style>
</head>
<body>
	<?php 
		echo $pass1; 
		echo "<br>";
		echo strlen($pass1);
	?>
	<br>

	<p>Enter a test password here: <input type="text" name="password" id="password"></p>
	<input type="text" id="stuff">
	<p>This is its hash: <span id="hash"></p>
	
	<?php 
	$password = 'This is a test password';
	echo "This is the test password: $password <br>";
	$new = password_hash($password, PASSWORD_BCRYPT);
	echo "Using password_hash function: " . strlen($new) . " - " . strtoupper($new);
	echo "<br>";
	echo "Using sha256 in hash() function: " . strlen($pass1) . " - " . strtoupper($pass1);


	 ?>
	<ul>
		<li>Don't hash password unless longer than 6 letters</li>
		<li>Check if password is a "stupid" password</li>
	</ul>
	 <table id="pass-table">
	 	<tr>
	 		<th>Password (PlainText)</th>
	 		<th>Password Hashed</th>
	 	</tr>

	 </table>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript">
		var hash = document.getElementById('hash');
		var dumbPasswords = {};
		$.post('stupid-passwords.php', { dumb: 'dumb' }, (data) => {
			dumbPasswords = JSON.parse(data);
		})



		$('#password').on('keyup', () => {
			var password = $('#password').val();
			$.post('passwords.php', { password : password }, function(data) {
				var tr = document.createElement('tr');
				var td1 = document.createElement('td');
				$(td1).text(password);
				var td2 = document.createElement('td');
				$(td2).text(data);
				$(tr).append(td1, td2)
				$('#pass-table').append(tr);
				$('#hash').text(data);
			})
			
		});
		

	</script>
</body>
</html>