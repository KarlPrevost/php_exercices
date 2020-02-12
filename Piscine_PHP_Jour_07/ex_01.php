<?php
function my_facto($nbr = NULL ){
    $fact = $nbr;
    if($nbr === 0) {
        return 1;
    } if(!is_int($nbr) || $nbr === NULL || $nbr <= -1)
        return NULL;
    for($i = --$nbr; $i > 1; $i--){
        $fact *= $i; 
    }
    return $fact;
}
?>