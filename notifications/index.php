<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notifications</title>
	<style>
		.header {
			height: 80px;
		}
		.footer {
			height: 100px;
			color: white;
			background-color: #4C5C68;
		}
		.container {
			min-height: 90vh;
		}
		.text {
			text-align: left;
		}
		.icon {
			display: inline-block;
			background-image: url('../artwork/bell.png');
			background-size: contain;
			background-repeat: no-repeat;
			width: 40px;
			height: 40px;
			position: relative;
			cursor: pointer;
		}
		.icon:hover {
			background-color: #ccc;
		}
		.navigation {
			text-align: right;
		}
		.container {
			text-align: center;
		}
		.add-btn {
			border: 2px solid black;
			border-radius: 4px;
			display: inline-block;
			/*width: 200px;*/
			padding: 1rem 3rem;
			font-size: 3rem;
			cursor: pointer;
		}

		.hide {
			display: none;
		}

		.notifications {
			background-color: red;
			color: white;
			font-size: 1rem;
			height: 20px;
			width: 20px;
			position: absolute;
			padding-top: 0.25rem;
			bottom: 0;
			left: 0;	
			border-radius: 30%;	
			text-align: center;	
		}

		.messages {
			position: absolute;
			top: 40px;
			right: 0;
			height: 400px;
			width: 300px;
			border: 1px solid black;
			overflow-y: scroll;
			padding: 0.1rem;
			display: none;
		}

		.note {
			text-align: left;
			height: 50px;
			border: 1px solid white;
			border-radius: 1px;
			padding: 0.3rem;
			
		}
		.note:hover {
			background-color: #aaa;
		}
		.unread {
			background-color: #ddd;
		}

		.icon:hover .messages {
			display: block;
		}

		.center {
			text-align: center;
		}
		table, td, th {
			border: 1px solid black;
			border-collapse: collapse;
		}
		td, th {
			padding: 0.2rem;
			text-align: center;
		}

	</style>
</head>
<body>
	<div class="main">
		<div class="header">
			<div class="navigation">
				<div class="icon">
					<div class="notifications hide"></div>
					<div class="messages ">
						
					</div>
				</div>	
			</div>
			
		</div>
		<div class="container">
			<div class="add-btn">+</div>
			<div class="center">
				<button class="click">Click Handler</button>	
			</div>
			
			<div class="text">
				<h1>Notifications</h1>
				<ul>
					<li>Watcher function => function to just ping the server looking for notifications</li>
					<ul>
						<li>This can probably be broken up into a few functions</li>
					</ul>
					<li><strong>Database:</strong></li>
					<ul>
						<li>user_id</li>
						<li>user_type</li>
						<li>notification type</li>
						<li>notification type identifier</li>
						<li>was notification read</li>
						<li>date read</li>
					</ul>
					<li>Load Old Notifications => bring in the last 10 notifications</li>
					<li>Update Notification Function => update message box with new notifications</li>
					<li>Logic to mark notifications as read</li>
					<li>Group notifications => several for a particular item, group it</li>
					<ul>
						<li>Notification Type &amp; ID => if several new notifications by type and ID, group them together. If more than 3, and unread, group into 1.</li>
						<ul>
							<li>Example: if for a Job Posting, and the person posts two jobs with ID's 1 
								and 2, one candidate applying results in a notificatin of the type (i.e. <em>job application</em>) followed by the ID of the job. It could like this:</li>
							<li>
								<table>
									<tr>
										<th>user_id</th>
										<th>user_type</th>
										<th>notification type</th>
										<th>notification type identifier</th>
										<th>was notification read</th>
										<th>date read</th>
									</tr>
									<tr>
										<td>1</td>
										<td>employer</td>
										<td>job application</td>
										<td>2</td>
										<td>0</td>
										<td></td>
									</tr>
									<tr>
										<td>1</td>
										<td>employer</td>
										<td>job application</td>
										<td>1</td>
										<td>0</td>
										<td></td>
									</tr>
									<tr>
										<td>1</td>
										<td>employer</td>
										<td>job application</td>
										<td>2</td>
										<td>0</td>
										<td></td>
									</tr>
								</table>
							</li>
						</ul>
						<li>Message &amp; Person => group messages by person, not just the existence of a message</li>
						
					</ul>
				</ul>	
			</div>
			
		</div>
		<div class="footer">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam necessitatibus beatae provident, nisi accusamus, id et illo perspiciatis enim ex facilis quas, saepe modi odit fuga libero adipisci, rerum quaerat!
		</div>
	</div>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$('.add-btn').on('click', function() {
			$.post('notifications.php', { add: 1}, function(data) {
				console.log(data);
			})
		})

		setInterval(function() {
			$.post('notifications.php', { updates: 1 }, function(data) {
				var objects = JSON.parse(data);
				var arr = Object.keys(objects).map(function(key) { return objects[key]; });
				var count = Object.keys(objects).length;
				if(count == 0) {
					$('.notifications').addClass('hide');
				} else {
					$('.notifications').removeClass('hide');
					$('.notifications').empty().append(count);	
					arr.map(function(item) {
						var d = document.createElement('div');
						$(d).addClass('note unread');
						$(d).append(item.nType);
						$('.messages').prepend(d);
					})
				}
				
			})
		}, 2500);

		// $('.icon').on('click', function() {
		// 	$('.icon:hover .messages').css('display', 'block');
		// })

		(function() {
			$.post('notifications.php', {getOldNotifications: 1}, function(data) {
				var objects = JSON.parse(data);
				var arr = Object.keys(objects).map(function(key) { return objects[key]; });
				var count = Object.keys(objects).length;
				
				arr.map(function(item) {
					var d = document.createElement('div');
					$(d).addClass('note');
					$(d).append(item.nType);
					$('.messages').append(d);
				});
				
			});
		})();

		$('.icon').hover(function() {
			$.post('notifications.php', {markRead: 1}, function(data) {
				setTimeout(function() {
					$('.note.unread').removeClass('unread');	
				}, 3500);
			});
		});

		$('.note.unread').hover(function() {
			setTimeout(function() {
				$(this).removeClass('unread');	
			}, 1250);
			
		});

		(function() {
			var click = document.querySelector('.click');
			var clicked = false;
			var count = 1;
			click.addEventListener('click', function() {
				if(!clicked) {
					console.log('first click');
				} else {
					console.log('some other click: ', count)
				}
				clicked = true;
				count++;
				console.dir(this);
			})
		})();
			
	
	</script>
	
</body>
</html>