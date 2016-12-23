<?php 

function increaseNumberRoundness($n) {
    $s = strrev((string)($n));
    $bool = false;
    $leading = true;
    echo $s;
    for ($i = 0; $i < strlen($s); $i++){
        $leading = $i == 0 ? true : false;
        if ($leading){
            
        } else {
            if ($s[$i+1] == 0){
                $bool = true;
            } else {
                $bool = false;
            }   
        }
        if ($bool) return $bool;
        
       
    }
    return $bool;
    
}

echo increaseNumberRoundness(11000);
echo true;

 ?>