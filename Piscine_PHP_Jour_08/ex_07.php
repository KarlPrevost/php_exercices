<?php

// Obligation d’utiliser "foreach"
// "count_char" prend une chaine de caractères en paramètre et retourne un tableau
// qui contient le nombre d’occurrences de chaque caractère (sauf les espaces et les tabulations).
// La fonction est sensible à la casse. Aussi, vous devez impérativement trier le tableau dans l’ordre croissant des clés
// avant d’être retourné.

function count_char($str){
    $myArr = [];
    $str = preg_replace('/\s\s+/', '', $str);
foreach (count_chars($str, 1) as $i => $val) {
      array_push($myArr, [chr($i) => $val]);
 }
 return $myArr;
}
print_r(count_char("UUUJJHGG fgdfg HHGGG"));
?>

