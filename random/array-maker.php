<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Maker</title>
	<link rel="stylesheet" href="../css/reset.css">

	<style>

		.main {
			text-align: center;
		}
		#array-text {
			font-family: "Courier New", monospace;
			font-size: 16px;
			width: 80%;
		}
		h1 {
			font-size: 30px;
			margin-bottom: 0.5rem;
		}
		h2 {
			font-size: 24px;
			color: grey;
			margin-bottom: 0.5rem;
		}
		textarea {
			font-size: 14px;
		}
		#submit, #sort {
			font-size: 18px;
			/*background-color: #0ff;*/
			
			background-color: #FFF;
		}
		.buttons-box {
			margin-bottom: 1rem;
		}

	</style>
</head>
<body>
	<div class="main">
		<h1>Welcome to the Array Maker</h1>
		<h2>Enter some words separated by a space and it will spit out an array.</h2>
		<textarea name="input-text" id="input-text" cols="100" rows="30"></textarea><br>
		<div class="buttons-box">
			<input type="submit" value="Submit" name="submit" id="submit">
			<input type="submit" value="Sort" name="sort" id="sort">	
		</div>
		<div id="array-text"></div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		$('#submit, #sort').on('click', function(e){
			e.preventDefault();
			var type = $(this).attr('id');
			console.log(type);
			var text = $('#input-text').val();
			var array = text.split(" ");
			if (type == 'sort') { 
				array.sort(function(a,b){
					if(a.toUpperCase() < b.toUpperCase()) return -1;
					if(a.toUpperCase() > b.toUpperCase()) return 1;
					return 0;
				}) 
			}
			var arrayString = "[";
			for (var i = 0; i < array.length; i++) {
				arrayString += '"';
				if(array[i] !== '') {arrayString += array[i];}
				arrayString += '"';
				if (i == (array.length - 1)) { 
					arrayString += "]" 
				} else {
					arrayString += ",";
				}
			}
			$('#array-text').text(arrayString);
		})
		
	</script>
</body>
</html>