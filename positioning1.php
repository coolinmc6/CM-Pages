<!-- positioning.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Positioning</title>
	<style>
		* {
			box-sizing: border-box;
		}
		.box {
			border: 3px solid black;
			height: 200px;
			width: 200px;
			/*background-color: red;*/
			text-align: center;
			font-size: 20px;
		}
		.mini-box {
			border: 1px solid black;
			height: 25px;
			width: 25px;
			z-index: 1;
			background-color: #000;

		}
		.red {
			background-color: #fa0;
		}
		.fixed {
			position: fixed;
			bottom: 5px;
			right: 500px;
		}
		.absolute {
			position: absolute;
			bottom: 20px;
			right: 0px;
		}
		.relative {
			position: relative;
			/*bottom: 200px;*/
			top: 0px;
			/*top: 100px;*/
			left: 250px;
		}
		.float-right {
			float: right;
		}
		#main {
			padding: 30px;
			background-color: #bbb;
		}
	</style>
</head>
<body>
	<div class="box red relative">RELATIVE
		<div class="mini-box fixed" title="RELATIVE: fixed"></div>
		</div>
	<div class="box red absolute">ABSOLUTE
		
	</div>
	</div>
	<div class="box red fixed">FIXED
		<div class="mini-box relative" title="FIXED: relative"></div>
		<div class="mini-box relative float-right" title="FIXED: relative, float-right"></div>
		<div class="mini-box absolute" title="FIXED: absolute"></div>
		<div class="mini-box" title="FIXED: static"></div>
	</div>
	<?php include_once('position-notes.php') ?>
	
</body>
</html>