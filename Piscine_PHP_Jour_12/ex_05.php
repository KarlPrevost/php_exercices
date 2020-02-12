<?php
function my_sort(&$tableau){
    static $count=0;
    $count++;
    $nbrE = count($tableau);
    $tableauT = $tableau[$nbrE-1];
    $tableau[$nbrE-1] = $tableau[0];
    $tableau[0] = $tableauT;
        return $count;
}
?>