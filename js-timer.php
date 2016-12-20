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
	</style>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
</head>

<body>
	<div class="clock-border">
		<div class="clock-face" >
			
		</div>
		<button class="restart">Restart</button>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		var start = 0;
		var seconds = 0;
		var minutes = 0;

		
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
			start = 0;
		})
		
	</script>
	
</body>
</html>