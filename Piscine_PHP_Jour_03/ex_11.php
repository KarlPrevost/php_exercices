<?php 
function my_sub(){
    global $nb_a;
    global $nb_b;
    return $nb_a = $nb_a - $nb_b;
}
?>