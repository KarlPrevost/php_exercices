<?php
// $tableau = ["un tableau", "deux tableaux","trois tableaux"];
function my_sort(&$tableau){
    static $count=0;
    $count++;
    $nbrE = count($tableau);
    $tableauT = $tableau[$nbrE-1];
    $tableau[$nbrE-1] = $tableau[0];
    $tableau[0] = $tableauT;
    // print_r($tableau); // l'énoncé ne dis pas d'afficher ni de retourner l'array
        return $count;
}
// var_dump(my_sort($tableau));
// var_dump(my_sort($tableau));
// var_dump(my_sort($tableau));
// var_dump(my_sort($tableau));
?>