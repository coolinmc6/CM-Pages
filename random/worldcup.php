<?php 


$pot1 = ["Russia", "Germany", "Brazil", "Portugal", "Belgium", "Poland", "France", "Argentina"];
$pot2 = ["Spain", "Peru", "Switzerland", "England", "Colombia", "Mexico", "Uruguay", "Croatia"];
$pot3 = ["Denmark", "Iceland", "Costa Rica", "Sweden", "Tunisia", "Egypt", "Senegal", "Iran"];
$pot4 = ["Serbia", "Nigeria", "Australia", "Japan", "Morocco", "Panama", "South Korea", "Saudi Arabia"];

for ($i=0; $i < 8; $i++) { 


	
	$n1 = rand(0,count($pot1)-1);
	$t1 = $pot1[$n1];
	array_splice($pot1, $n1, 1);

	$n2 = rand(0,count($pot2)-1);
	$t2 = $pot2[$n2];
	array_splice($pot2, $n2, 1);

	$n3 = rand(0,count($pot3)-1);
	$t3 = $pot3[$n3];
	array_splice($pot3, $n3, 1);

	$n4 = rand(0,count($pot4)-1);
	$t4 = $pot4[$n4];
	array_splice($pot4, $n4, 1);
	
	$c = $i + 1;
	$group = "Group {$c}: " . $t1 . " - " . $t2 . " - " . $t3 . " - " . $t4;
	echo $group . "<br>";

}

function updateArray($array) {
	$index = rand(0,count($array)-1);
	$item = $array[$index];
	$array = array_splice($array, $index,1);
	return $item;
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>World Cup Simulator</title>
</head>
<body>
	
</body>
</html>