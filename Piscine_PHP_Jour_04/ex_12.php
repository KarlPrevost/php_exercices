<?php 
function is_similar($a, $b) {
    if(gettype($a) == gettype($b) && $a == $b) {
        echo "Same type and value.\n";
    } elseif($a == $b) {
        echo "Same value.\n";
        
    } elseif((gettype($a) == gettype($b))){
        echo "Same type.\n";
    }
}
?>