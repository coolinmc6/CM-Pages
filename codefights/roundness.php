<?php 

function increaseNumberRoundness($n) {
    $s = strrev((string)($n));
    $bool = false;
    echo "Initial bool is $bool <br>";
    $leading = true;
    echo "Number is: $n and String is: $s <br>";
    for ($i = 0; $i < strlen($s); $i++){
        
        if ($leading){
            $leading = $s[$i] == 0 ? true : false;
            echo "leading: " . $leading . " and number is: ". $s[$i] . "<br>";
        } else {
            
            if ($s[$i] == '0') {
                $bool = true;
                if ($bool) return $bool;
            }
        }
        
        if ($bool) return $bool;
        
       
    }
    
    return $bool;
    
}

echo increaseNumberRoundness(99080);


// $cond = false;
// for ($i=0; $i < 10; $i++) { 
//     echo "$i is less than 10<br>";
//     if($i == 6){
//         $cond = true;
//     }
//     if ($cond) return $cond;
// }




 ?>