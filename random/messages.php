<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Messages</title>
	<style>
		* {
			box-sizing: border-box;
		}
		.main {
			padding: 1rem;
			text-align: center;
		}
		#user {
			width: 150px;
			font-size: 1.05rem;
		}
		.messages {
			border: 1px solid black;
			width: 80%;
			display: inline-block;
			height: 500px;
			overflow-y: scroll;
		}

		.enter-message input {
			width: 68%;
			font-size: 1.0rem;
		}
		#send {
			width: 12%;
			font-size: 1.0rem;
		}
		.message-row {
			padding: 0.5rem;
			text-align: right;
			position: relative;
			display: block;
		}
		.message-row.self {
			text-align: right;
		}
		.message-row.other {
			text-align: left;
		}
		.message-body.self, .message-body.other {
			width: 50%;
			display: inline-block;
			
			padding: 0.2rem;
		}
		.message-body.self {
			background-color: #B9EF77;
			text-align: right;
			
			
		}
		.message-body.other {
			background-color: #FF9999;
			text-align: left;
			
		}
	</style>
</head>
<body>
	<div class="main">
		<select name="user" id="user">
			<option value="1">Colin</option>
			<option value="2">Casey</option>
		</select>
		<br><br>
		<div class="messages">
			
		</div>
		<div class="enter-message">
			<input type="text" /><button id="send">Send Message</button>
		</div>	

		<div>
			<strong>When Colin:</strong> 
			<br>
			messages I sent in green; <br>
			i have to determine whether I sent the message
			messages received in blue. <br>

		</div>
	</div>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>

		function makeHTMLElement(tag, classes, text, attributes) {
			var d = document.createElement(tag);
			$(d).addClass(classes);
			$(d).append(text);
			for(var prop in attributes) {
				$(d).attr(prop, attributes[prop]);
			}
			return d;

		}
		var object = {};
		object.lastID = 0;

		$('#send').on('click', function() {
			var info = {};
			info.newMessage = 1;
			info.userID = $('#user').val();
			info.message = $('.enter-message input').val();
			var messages = Array.from($('.message-row'))
			
			// object.lastID = messages[messages.length-1]['attributes']['data-msgid'].value;
			// console.log(lastID);
			if(info.message != '') {
				$.post('functions/messages.php', info, function(data) {
					console.log(data);
					getMessages();
					$('.enter-message input').val('');
				})		
			}
			
		})
		
		var getMessages = function(msgID) {
			var info = {};
			info.getMessages = 1;
			info.userID = $('#user').val();
			info.lastID = msgID ? msgID : 0;
			console.log(info, msgID);

			$.post('functions/messages.php', info, function(data) {
				// var objects = JSON.parse(data);
				// var arr = Object.keys(objects).map((item) => objects[item]);
				// arr.map((msg) => {
				// 	var atts = {};
				// 	atts['data-self'] = $('#user').val();
				// 	atts['data-sender'] = msg.senderID; 
				// 	atts['data-receiver'] = msg.receiverID;
				// 	atts['data-msgID'] = msg.messageID;
					

				// 	var sendClass = atts['data-self'] == msg.senderID ? 'self' : 'other';

				// 	var d = makeHTMLElement('div', 'message-row ' + sendClass, '', atts);
				// 	var m = makeHTMLElement('div', 'message-body ' + sendClass, msg.message, {});
				// 	$(d).append(m);
				// 	$('.messages').append(d);
				// })
				
				// console.log('new message');

				console.log(data);
			})	
		}
		

		$('#user').on('change', function() {
			getMessages(0);
		})




		
	</script>
	
</body>
</html>