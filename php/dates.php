<?php 

$date = '10/01/2017';

$a = strtotime($date);

echo $a . "<br>";	

echo date( 'Y-m-d',$a);

echo "<hr>";
$year = strtotime('now');
$yearAlt = date('now');
echo "Using strtotime('now'):" . $year . "<br>";
echo "Using date('now'):" . $yearAlt . "<br>";

$m1 = date("m", $year);
echo "The month is " . $m1 . " and istype " . gettype($m1) . "<br>";

if((int)$m1 < 10) {
	echo true;
} else {
	echo false;
}

$today = strtotime('now');
$month = (int)date("m", (int)$today);
$year = (int)date("Y", (int)$today);

function checkMonth($m) {
	if($m < 10) {
		return true;
	} else {
		return false;
	}
}

if(!checkMonth($month)){
	echo "after October";
} else {
	echo "other message";
}

// $tests = ['12/01/2016', '01/01/2016', '03/03/2016'];

// for ($i=0; $i < count($tests); $i++) { 
	
// 	$m = (int)date("m", (int)$tests[$i]);
// 	echo $m;
// 	if(checkMonth($m)) {
// 		echo "$i: {$tests[$i]} -- redirect to current year";
// 	} else {
// 		echo "$i: GIVE TWO OPTIONS";
// 	}
	
// 	echo "<br>";
// }



 ?>