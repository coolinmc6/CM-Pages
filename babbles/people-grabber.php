<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>People Grabber</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		#main {
			
		}
		.user-profile {
			border: 1px solid black;
			padding: 1rem;
			position: relative;
			height: 100px;
			
		}
		.user-profile img {
			position: absolute;
			right: 1rem;
			top: 1rem;
		}
		button {
			margin-bottom: 1rem;
		}
	</style>
</head>
<body>
	<div class="container">
		<button id="show" class="btn btn-primary">SHOW USERS</button>
		<div id="main">
			<div class="container">
				<table class="table table-hover">
					<tr>
						<th>Field</th>
						<th>API with map => users.results.map(function(item)</th>
					</tr>
					<tr>
						<td>Name</td>
						<td>item.name.first, item.name.last</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>item.email</td>
					</tr>
					<tr>
						<td>Username</td>
						<td>item.login.username</td>
					</tr>
					<tr>
						<td>Password</td>
						<td>item.login.sha256</td>
					</tr>
					<tr>
						<td>Picture</td>
						<td>item.picture.thumbnail</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
			
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		function capitalizeFirstLetter(string) {
		    return string.charAt(0).toUpperCase() + string.slice(1);
		}

		function createPerson(fname, lname, gender, picture) {
			var div = document.createElement('div');
			$(div).addClass('user-profile');
			var personalInfo = `${capitalizeFirstLetter(fname)} ${capitalizeFirstLetter(lname)} - ${gender}`;
			var img = document.createElement('img');
			$(img).attr('src',picture);
			$(div).append(personalInfo,img);
			$('#main').append(div);
			// $('#main').append(`<div>${capitalizeFirstLetter(fname)} ${capitalizeFirstLetter(lname)} - ${gender}</div>`);
			
		}		

		$('#show').on('click',function(){
			var users = {};
			$.get('https://randomuser.me/api/?results=100',null, function(data){
				users = data;
				console.log(users);
				var count = 0;
				users.results.map(function(item) {
					if (count < 10) {
						createPerson(item.name.first, item.name.last, item.gender, item.picture.thumbnail)
					}
					count++
					
				})

			});	
		})


	</script>
	
</body>
</html>