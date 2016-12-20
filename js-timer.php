<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JavaScript Timer</title>
	<style>
		.clock-border {
			border: 4px solid black;
			-webkit-border-radius: 4px;
			        border-radius: 4px;
			padding: 1rem;
			display: inline-block;
			text-align: center;
		}
		.clock-face {
			background-color: #ddd;
			font-size: 100px;
			color: red;
			width: 400px;
			font-family: 'Inconsolata', monospace;
			text-align: center;
			margin-bottom: 20px;
		}
		.restart {
			width: 200px;
			height: 40px;
			font-size: 30px;
		}
		#stuff {
			text-align: center;
		}
		
	</style>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
</head>

<body>
	<div class="clock-border">
		<div class="clock-face" >
			
		</div>
		<button class="restart">Restart</button>

	</div>
	<table id='stuff'>
		<tr>
			<th>Date</th>
			<th>Time</th>
			<th>Activity</th>
		</tr>
	</table>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		var start = 0;
		var seconds = 0;
		var minutes = 0;
		var objects = [];

		
		setInterval(function(){
			start += 1000;
			minutes = start / 60000;
			seconds = start / 1000;
			if (minutes < 1){
				var minString = "00"
			} else if(minutes < 10){
				var minString = "0" + Math.floor(minutes).toString()
			} else {
				var minString = Math.floor(minutes).toString()
			}

			if (Math.floor(seconds % 60) < 10){
				var secString = "0" + Math.floor(seconds % 60,2).toString()
			} else {
				var secString = Math.floor(seconds % 60,2).toString()
			}
			
			var timeString = minString + ":" + secString;
			$('.clock-face').html(timeString);
		}, 1000)
		
		$('.restart').on('click',function(){
			var e = new Date();
			var object = { date: e, time: Math.floor(start/60000,4) + ' mins' }
			objects.push(object)
			start = 0;
			showItems(object);
		})

		function showItems(object){
			var tr = document.createElement('tr');
			var th1 = document.createElement('td');
			th1.innerHTML = object['date'];
			var th2 = document.createElement('td');
			th2.innerHTML = object['time'];
			var th3 = document.createElement('td');
			th3.innerHTML = 'Stuff';
			var stuff = document.getElementById('stuff')
			tr.appendChild(th1)
			tr.appendChild(th2)
			tr.appendChild(th3)
			stuff.appendChild(tr)
			
			
			
		}
		
	</script>
	
</body>
</html>