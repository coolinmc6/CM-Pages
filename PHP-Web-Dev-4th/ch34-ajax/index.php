<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AJAX work</title>
	
	<style>
		body {
			background: #fff;
			font-family: Verdana, sans-serif;
			font-size: 12pt;
			font-weight: normal;
		}

		.displaybox {
			width: 300px;
			height: 50px;
			background-color: #fff;
			border: 2px solid black;
			line-height: 2.5rem;
			margin-top: 25px;
			font-size: 12pt;
			font-weight: bold;
		}
	</style>
	<script src="ajax_functions.js" type="text/javascript"></script>
<script type="text/javascript">
var myReq = getXMLHTTPRequest();
</script>
</head>
<body>
	<div align="center">
		<h1>Ajax Demonstration</h1>
		<p align="center">Place your mouse over the box below
		to get the current server time.<br/>
		The page will not refresh; only the contents of the box
		will change.</p>
		<div id="showtime" class="displaybox"
		onmouseover="javascript:getServerTime();"></div>
	</div>
</body>
</html>