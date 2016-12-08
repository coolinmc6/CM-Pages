<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JavaScript Logic</title>
	<style>
		body {
			color: black;
		}
		p {
			background-color: #ddd;
			height: 50px;
		}
	</style>
</head>
<body>
	
	<input type="text" name="yes-no" id="yes-no"><br>
	<button onclick="isYes()">Submit</button>
	<p id="p-tag">This is <strong> a p-tag </strong></p>
	<br><br>
	<p id="upper"></p>
	<p id="lower"></p>
	<script>
		var a = false;
		var b = false;
		var c = false;
		var d = true;

		if (a && b && c || d){
			console.log(true);
		} else {
			console.log(false);
		}
		
		function isYes(){
			var i = document.getElementById('yes-no').value;
			// var v = i.value;
			var a = 'hello';
			console.log("This is element.value: " + document.getElementById('p-tag').value);
			console.log("This is element.innerText: " + document.getElementById('p-tag').innerText);
			console.log("This is element.innerHTML: " + document.getElementById('p-tag').innerHTML);
			console.log("This is element.textContent: " + document.getElementById('p-tag').textContent);

			document.getElementById("upper").text = "UPPER CASE";
			if (i === 'Yes') {
				console.log('inside the if-statement')
				
				var u = document.getElementById('upper');
				u.textContent = "UPPER CASE";
				document.getElementById("upper").text = "UPPER CASE";

				// alert(a.toUpperCase());
			} else {
				alert("You did not enter the word Yes")
				document.getElementById('lower').value = "lower case";
			}
		}
	</script>

	<select name="cmDropdown" id="cmDropdown">
		<option value="Select">Select a Value</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<p id="displaySelect"></p>
	<div id="logic"></div>
	<script>
		var s = document.getElementById('cmDropdown');
		var p = document.getElementById('displaySelect');
		var l = document.getElementById('logic');
		s.addEventListener('change',function(){
			p.innerText = s.value;
			var a = (s.value == 2) ? "the number is 2" : s.value < 2 ? "just one" : s.value > 4 
			? "it's 2+3" : s.value <= 4 ? "3 or 4" : "dude I have no idea";
			// console.log(a);
			l.innerText = a;
		})

		// s.value >= 2 ? l.value("2 or bigger") : l.value("just one");
		
		// var isMember = true;
		// l.value = "The fee is " + (isMember ? "$2.00" : "$10.00")
		
	</script>

	
</body>
</html>
