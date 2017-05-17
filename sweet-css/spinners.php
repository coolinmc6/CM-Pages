<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Spinners</title>
	<link rel="stylesheet" href="../css/spinners.css">
	<link rel="stylesheet" href="../css/cm-spinners.css">
</head>
<body>
	<div class="wrap">
		<div class="spinner spinner-1"></div>	

		<div class="spinner spinner-2"></div>
		  
		<div class="spinner spinner-3"></div>

		<div class="spinner spinner-4"></div>

		<div class="spinner spinner-5">
			<span></span>
			<span></span>
			<span></span>	
		</div>
		
	</div>

	<div class="wrap2">
		<div class="cm-spinner cm-spinner-1"></div>
	</div>

	<div class="notes">
		<strong>White box with gray square as my start</strong><br>
		<code>
			.wrap2 {<br>
				width: 100%;<br>
				background-color: #FFF;<br>
				box-shadow: 0px 40px 60px -20px rgba(0,0,0,0.2);<br>
				text-align: center;<br>
				vertical-align: center;<br>
				
			} <br>

			.cm-spinner {<br>
				width: 100px;<br>
				height: 100px;<br>
				background-color: #eee; <br>
				display: inline-block;<br>
				margin: 50px;<br>
			}
			
		</code>
		<ul>
			<li>After adding the the <code>&:before, &:after</code> code you can see that there is another block
			right below my first one.
			</li>
			<li>To give my spinner the appearance of a movable red border, I need to position it's "after" block 
			behind my spinner.  Using absolute positioning, move it up 4px, left 4px but then add a 4px border.
			Would box-sizing: border-box screw this up?  CM => it didn't appear to...</li>
			<li>For the CSS animation property, I think I understand it a bit:</li>
			
			<ul>
				<li>the first string is the name of the effect.  So "spinny" is what the DevTips guy called it
				but that's not the name of the effect.  You define what "spinny" is using @keyframes</li>
				<li></li>
				<li>"1s" is self-explanatory (one-second) while linear" and "infinite" appear to be how the 
				animation is performed and how long needs to run.</li>
				<li>The @keyframes isn't that bad either. It appears that you just give the "coordinates" of
				where the animation should be and at what time. So at 0% (time = 0s), it's rotation will be 0
				degrees and be at scale 1.0 (not bigger or smaller).  At 50% (time = 0.5s), it will have
				rotated 45 degrees and will be slightly larger at scale 1.2.  By 100% (time = 1s), it will have
				rotated 360 degrees and will be back to normal size, scale 1.0.</li>
				<li><strong>Note:</strong> you can speed it up by either shortening the animation speed OR you
				can change the degrees (i.e. 720deg).  This changes the animation but it's a different way of
				speeding it up.</li>
			</ul>
			
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>

	</div>
	
	
</body>
</html>