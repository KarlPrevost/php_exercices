<?php 
function my_swap_vars(&$a, &$b){
    $tempa = $a;
    $a = $b;
    $b = $tempa;
}
?>