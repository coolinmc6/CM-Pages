<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dropdown</title>
	<style>
		.header {
			background-color: #4CAF50;
		}
		.header ul li {
			display: inline-block;
			list-style: none;
			
		}

		/* Dropdown Button */
		.dropbtn {
		    background-color: #4CAF50;
		    color: white;
		    padding: 16px;
		    font-size: 16px;
		    border: none;
		    cursor: pointer;
		}

		/* The container <div> - needed to position the dropdown content */
		.dropdown {
		    position: relative;
		    display: inline-block;
		}

		/* Dropdown Content (Hidden by Default) */
		.dropdown-content {
		    display: none;
		    position: absolute;
		    background-color: #f9f9f9;
		    min-width: 160px;
		    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		    z-index: 1;
		}

		/* Links inside the dropdown */
		.dropdown-content a {
		    color: black;
		    padding: 12px 16px;
		    text-decoration: none;
		    display: block;
		}

		/* Change color of dropdown links on hover */
		.dropdown-content a:hover {background-color: #f1f1f1}

		/* Show the dropdown menu on hover */
		.dropdown:hover .dropdown-content {
		    display: block;
		}

		/* Change the background color of the dropdown button when the dropdown content is shown */
		.dropdown:hover .dropbtn {
		    background-color: #3e8e41;
		}

		/* COLIN's CODE */
		/* How to make a dropdown:
		1. Button, link, or any element that you want to be hovered under
		2. Wrap that in a "dropdown-container" class: it's going to hold the entire div that holds the main
		visible link/element PLUS all the dropdown-contents
		3. Under that link, you want your dropdown-contents.  These dropdown-contents have all the links and
		such that you want to show.  It doesn't matter what's in the dropdown.
		4. Now you can style.  A dropdown does the following:
		  a. when you hover on it, it shows more links/stuff below it
		  b. when you hover off it OR the links in the dropdown, it goes away
		5. First, start with hiding your dropdown content => display: none
		6. Because you only want it visible when hovering over your main link element, you need to select
		the dropdown-container:hover THEN change dropdown-stuff to display: block
		7. Now, fix the expansion and contraction of the parent div by making the position of dropdown-contents
		(or dropdown-stuff) absolute.  It now doesn't take up vertical space in the div.  So when visible, it's
		simply on top of anything...if not, set z-index to a higher number
		8. Now you can style: change color of button/link when hovering, etc.




		*/
		.header2 {
			background-color: #ff0;
			position: relative;
		}
		.header2 ul {
			list-style: none;
		}
		.header2 li {
			display: inline-block;
		}

		.dropdown-stuff {
			display: none;
			position: absolute;
			background-color: #990;
		}

		.dropdown-container:hover .dropdown-stuff{
			display: block;
		}

		.dropdown-container > a:hover {
			background-color: #FFF;
		}
		
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		th {
			position: relative;
		}
		th:hover .hidden {
			display: block;
		}
		.hidden {
			display: none;
			position: absolute;
			top: -24px;
			width: 200px;
			height: 20px;
			border: 1px solid black;
		}







	</style>
</head>
<body>
	<div class="header">
		<ul>
			<li>
				<a href="#">
					<div class="dropdown">
					  <button class="dropbtn">Dropdown</button>
					  <div class="dropdown-content">
					    <a href="#">Link 1</a>
					    <a href="#">Link 2</a>
					    <a href="#">Link 3</a>
					  </div>
					</div>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="dropdown">
					  <button class="dropbtn">Dropdown</button>
					  <div class="dropdown-content">
					    <a href="#">Link 1</a>
					    <a href="#">Link 2</a>
					    <a href="#">Link 3</a>
					  </div>
					</div>
				</a>
			</li>
			<li>
				<a href="#">
					<div class="dropdown">
					  <button class="dropbtn">Dropdown</button>
					  <div class="dropdown-content">
					    <a href="#">Link 1</a>
					    <a href="#">Link 2</a>
					    <a href="#">Link 3</a>
					  </div>
					</div>
				</a>
			</li>
			<li><a href="#">Lorem</a></li>
			<li><a href="#">Lorem</a></li>
			<li><a href="#">Lorem</a></li>
		</ul>
	</div>

	<div class="header2">
		<ul class="links-list">
			<li class="dropdown-link">
				<div class="dropdown-container">
					<a href="#">Main Link</a>
					<div class="dropdown-stuff">
						<a href="#">Secondary</a><br>
						<a href="#">Secondary</a><br>
						<a href="#">Secondary</a><br>
					</div>
				</div>
			</li>
			<li class="dropdown-link">
				<div class="dropdown-container">
					<a href="#">Main Link</a>
					<div class="dropdown-stuff">
						<a href="#">Secondary</a><br>
						<a href="#">Secondary</a><br>
						<a href="#">Secondary</a><br>
					</div>
				</div>
			</li>
		</ul>
	</div>

	<table>
		<thead>
			<tr>
				<th>
					<div class="hidden">What's up</div>
					Stuff
				</th>
				<th>Stuff</th>
			</tr>
		</thead>
		<tbody></tbody>
	</table>
	
</body>
</html>