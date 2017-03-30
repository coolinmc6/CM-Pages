<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Toasts & Warnings</title>
	<style>
		body {
			font-family: 'Open Sans', sans-serif;
		}
		button {
			font-size: 1.2rem;
			margin-bottom: 0.5rem;
			
		}
		#success, #warning, #toast {
			display: none;
			padding: 1rem;
			text-align: center;
			font-size: 1.1rem;
			-webkit-border-radius: 3px;
			        border-radius: 3px;
			margin: 1rem 0rem;
			
		}
		#success {
			background-color: #dff0d8;
			border-color: #398439;
			border: 1px solid;
			color: #3c763d;
		}
		#toast {
			position: absolute;
			bottom: 1rem;
			right: 1rem;
			width: 250px;
			height: 100px;
			background-color: green;
			color: #fff;
		}
		#warning {
			background-color: #F2DEDE;
			color: #A94442;
			border: 1px solid #a94442;
		}
		#toast.show, #success.show, #warning.show {
			display: block;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

</head>
<body>
	<div class="container">
		<button id="btn-toast">Toast</button>
		<br>
		<button id="btn-success">Success</button>
		<br>
		<button id="btn-warning">Warning</button>
		<div id="success">This is a success message</div>
		<div id="warning">This is a warning message</div>
		<p>
			Display a toast, warning, or success message using the buttons above.
		</p>







		<div id="toast">This is toast!</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>

		function showFlash(id) {
			var x = document.getElementById(id);
			x.className = "show";
			setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);	
		}

		$('#btn-toast').on('click', function() {
			showFlash('toast')
		});

		$('#btn-success').on('click', function() {
			showFlash('success')
		});

		$('#btn-warning').on('click', function() {
			showFlash('warning')
		});











		
	</script>
	
</body>
</html>