<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CAT Test</title>
</head>
<body>
	<ol>
		<li>Questions are in a database</li>
		<li>Each question has:</li>
		<ul>
			<li>Question text in HTML</li>
			<li>Three to Four answers</li>
			<li>Signifier of the right answer (1,2,3,4)</li>
			<li>Answer / Explanation text in HTML</li>
		</ul>
	</ol>

	<div id="root"></div>
	<div id="markdown"></div>
	<script src="https://unpkg.com/marked@0.3.6"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react-dom.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.21.1/babel.min.js"></script>
	<script type="text/babel">


		class Greeting extends React.Component {
		    render() {
		        return (
		        	<div>Hello world
		        		
		        	</div>
		        );
		    }
		}
		ReactDOM.render(
		    <Greeting />,
		    document.getElementById('root')
		);

		


	</script>
	<script>
		var m = document.getElementById('markdown');
		m.innerHTML = marked('# Marked in browser\n\nRendered by **marked**');
	</script>

</body>
</html>