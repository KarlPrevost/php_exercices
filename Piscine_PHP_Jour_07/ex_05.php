<?php
function sum_it($nbr = NULL, $iteration = NULL){
    if($nbr === NULL || $iteration === NULL || !is_int($nbr) || !is_int($iteration))
    return NULL;
   if($iteration < 0 ){
    for($i = $iteration*-1; $i > 0; $i--){
        $nbr += $i*-1;
    }
    } else {
        for($i = $iteration; $i > 0; $i--){
            $nbr += $i;
        }
}
    return $nbr;
}

?>