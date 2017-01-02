<?php
function lineUp($commands) {
    $comArray = [];
    for ($i = 0; $i < strlen($commands); $i++){
        array_push($comArray,$commands[$i]);
    }
    print_r($comArray);
    
}
lineUp('LLARL');



function additionWithoutCarrying($param1, $param2) {
    $p1 = (string)$param1;
    $p2 = (string)$param2;
    $p1 = strrev($p1);
    $p2 = strrev($p2);
    $newNum = [];
    $maxLength = max(strlen($p1),strlen($p2));
    for ($i = 0; $i < $maxLength; $i++){
        if ($p1[$i] == 'undefined') {
            $p1[$i] = 0;
        } else if ($p2[$i] == 'undefined'){
            $p2[$i] = 0;
        }
        $total = (int)$p1[$i] + (int)$p2[$i];
        $a = strrev((string)$total);
        $b = $a[0];
        array_push($newNum,$b);
    }
    print_r($newNum);
    
        
}

additionWithoutCarrying(456,1734);

?>