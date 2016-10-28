<!-- positioning.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Positioning</title>
	<style>
		.box {
			border: 1px solid black;
			height: 200px;
			width: 200px;
			background-color: red;
		}
		#fixed {
			position: fixed;
			bottom: 0px;
		}
		#absolute {
			position: absolute;
			bottom: 0px;
			right: 0px;
		}
		#relative {
			position: relative;
			bottom: 100px;
			/*top: 100px;*/
			left: 250px;
		}
	</style>
</head>
<body>
	<div class="box" id="relative">RELATIVE</div>
	<div class="box" id="absolute">ABSOLUTE</div>
	<div class="box" id="fixed">FIXED</div>
	
</body>
</html>