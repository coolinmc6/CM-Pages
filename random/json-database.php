<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		code {
			color: red;
			background-color: #ddd;
			padding: 0.1rem 0.25rem;
		}
		p, li {
			line-height: 1.3rem;
		}
		.link {
			color: blue;
			background-color: #eee;
			padding: 0.1rem 0.25rem;
		}
		.filename {
			color: brown;
			background-color: #eee;
			padding: 0.1rem 0.25rem;
		}
	</style>
</head>
<body>
	<h1>JSON Database</h1>
	<p>So I can pretty much have a database whenever I want and I DON'T need to do anything too crazy
	to set it up.  I describe the steps here: <a href="https://github.com/coolinmc6/egghead-todo">Egghead.io Todo
	 App</a> but here are the basic steps.
	<ol>
		<li>Install the json server globally: <code>npm i -g json-server</code></li>
		<li>Make a <span class="filename">db.json</span> file in my repo's directory (but it probably doesn't need to be)</li>
		<li>"Create" a database in db.json as follows: curly braces, "string" key which is the name of my database,
		 colon, empty array</li>
		<ul>
			<li><code>{ "todos": [ ] }</code> => obviously, space it out to appropriate json format</li>
		</ul>
		<li>Start your server: <code>json-server -p 8008 --watch db.json</code></li>
		<li>You can then start writing GET, POST, and PUT requests to your server at this URL:
		<span class="link">http://localhost:8080/todos</span></li>
		<li>I'll need to leave soon but THIS IS AWESOME!</li>

	</ol>
	 </p>
	<input type="text" id="text">
	<button id="submit">Submit</button>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		function generateID() {
			return Math.floor(Math.random()*100000000000)
		}
		function getData(){
			$.get('http://localhost:8080/todos',{ id: 1 },  function(data){
				console.log(data);
			})
		}
		$('#submit').on('click', function(e){
			e.preventDefault();
			var id = generateID();
			var text = $('#text').val();
			$.post('http://localhost:8080/todos', { id : id, item: text, field: "unexpected third field"}, function(data) {
				console.log("Success?");
			})	
			getData();

		})
		
	</script>
</body>
</html>