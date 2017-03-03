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
		#pass-table {
			margin-top: 1rem;
			width: 49%;
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
		// echo $pass1; 
		// echo "<br>";
		// echo strlen($pass1);

		$password = 'TestPassword57an1-39djan';
		echo "This is the test password: $password <br>";
		$new = password_hash($password, PASSWORD_BCRYPT);
		echo "Using password_hash function: <strong>" . strlen($new) . " characters</strong> - " . strtoupper($new);
		echo "<br>";
		echo "Using sha256 in hash() function: <strong>" . strlen($pass1) . " characters</strong> - " . strtoupper($pass1);
	?>
	<br>

	<p>Enter a test password here: <input type="text" name="password" id="password">(must be longer than 6 characters)</p>
	<p>This is its hash: <span id="hash"></p>
	
	<ul>
		<li>Check if password is a "stupid" password</li>
	</ul>
	 <table id="pass-table">
	 	<tr>
	 		<th>Password (PlainText)</th>
	 		<th>Password Hashed</th>
	 	</tr>

	 </table>
	 <button id="get-passwords">Get All Passwords</button>
	 <button id="create-users">Create Users</button>
	 <button id="next-id">Next Password ID</button>
	<table>
		
	</table>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script type="text/javascript">
		// IF USING JSON-SERVER, make this true
		const JSON_SERVER = true;
		let topID = 0;

		getNextID = () => {

			$.get('http://localhost:8008/passwords', (data) => {
				allPasswords = data;
				let stuff = allPasswords.reduce((a,b,i) => {
					console.log("a.id:",a.id," --- b.id:",b.id, " and i", i)
					return a.id > b.id ? a : b;
				})
				topID = stuff.id
				console.log(topID)
				

			});
		}

		console.log(topID);
		getNextID();

		$('#next-id').on('click', function() {
			getNextID();
		})
		

		var hash = document.getElementById('hash');
		var dumbPasswords = {};
		$.post('stupid-passwords.php', { dumb: 'dumb' }, (data) => {
			dumbPasswords = JSON.parse(data);
		});

		generateID = () => {
			return Math.floor(Math.random()*100000000000000000);
		}

		createRandomUser = () => {
			const user = {
				id: generateID(),
				name: 'guest',
				password: 'plaintext'
			}
			$.post('http://localhost:8008/users',user,(data) => {
				console.log('complete from inside post');
			})
			

		}

		$('#create-users').on('click', () => {
			createRandomUser();
			console.log(generateID());
		})
		



		$('#password').on('keyup', () => {
			var password = $('#password').val();
			if (password.length >= 6) {
				$.post('passwords.php', { password : password }, function(data) {
					var tr = document.createElement('tr');
					var td1 = document.createElement('td');
					$(td1).text(password);
					var td2 = document.createElement('td');
					$(td2).text(data);
					$(tr).append(td1, td2)
					$('#pass-table').append(tr);
					$('#hash').text(data);
					if (JSON_SERVER) {

						$.post('http://localhost:8008/passwords', { password: password }, function(data) {
							console.log("The response is just the object: ",data);
						})
					}
				})
			}
			
			
		});
		let allPasswords = [];
		$('#get-passwords').on('click', () => {
			$.get('http://localhost:8008/passwords', (data) => {
				allPasswords = data;
				let stuff = allPasswords.reduce((a,b) => {
					return a.id > b.id ? a : b;
				})
				topID = stuff.id;

			});

		});

		
		

	</script>
</body>
</html>