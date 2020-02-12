<?php
function my_pow_rec($nb_a = NULL, $nb_b = NULL){
    if(($nb_a === NULL && $nb_b === NULL) || $nb_b < 0 || !is_int($nb_a) || !is_int($nb_b))
    return NULL;
    if($nb_b === 0)
    return 1; 
    return $nb_a*my_pow_rec($nb_a, --$nb_b);
}
?>