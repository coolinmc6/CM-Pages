<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>State</title>
</head>
<body>
	<input type="text" id="search" placeholder="Search" value="" onkeydown="returnState()"/>
	<button id="submit">Submit</button>
	<p id="search-term"></p>

	<script>
		var state = {
			term: 'stuff',
			searches: {}
		};

		var input = document.getElementById('search');
		var pTag = document.getElementById('search-term');
		var submit = document.getElementById('submit');

		function generateID() {
			return Math.floor(Math.random()*10000000000);
		}
		function returnState() {
			state.term = input.value;
			console.log(state.term)
			pTag.innerHTML = state.term
			return state.term
		}

		setInterval(returnState(), 10)

		setInterval(function() {
			console.log(state.term)
		}, 2500)

		submit.addEventListener('click', function(e){
			e.preventDefault();
			term = returnState();
			var id = generateID();
			state.searches[id] = term;
			
		})














	</script>
	
</body>
</html>