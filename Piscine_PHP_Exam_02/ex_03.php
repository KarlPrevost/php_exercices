<?php 
function ord_alphlong($str = NULL){
if($str === NULL){
echo "n";
return;
}
$str = str_word_count($str, 1);      // string to array
 usort($str, function($a, $b) {  // Fonction qui trie par ordre de longueur de valeur
    $difference =  strlen($a) - strlen($b);
    return $difference ?: strcmp($a, $b);
});
$str2 = $str; 
$str = implode(" ", $str);
echo $str. "\n";
sort($str2);
$str2 = implode(" ", $str2);
echo $str2 . "\n";
}
?>