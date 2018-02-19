<?php 


function stuffHappens() {
	$array = [1,2,3,4,5,6,7,8];
	foreach ($array as $arr) {
		echo $arr . "<br>";
		$stuff = $arr;
	}
	
	echo 'Inside the function: ' . $stuff;		
}

stuffHappens();
echo 'Outside the function:' . $stuff;		






 ?>