<?php 
function my_pow($nb_a = NULL, $nb_b = NULL){
    $power = $nb_a;
    if ($nb_a === NULL && $nb_b === NULL){
        return NULL;
    } 
    if ( $nb_b === 0){
        return 1;
    }
    if ($nb_b < 0) {
        return NULL;
    }
    if (is_int($nb_a) && is_int($nb_b)){
        for ($i = 1; $i < $nb_b; $i++){
        $power = $power*$nb_a;
    }  
    return $power;
    } else {
        return NULL;
    }
}
?>