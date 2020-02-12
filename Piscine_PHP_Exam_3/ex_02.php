<?php
function resum_join_str($chaine_1 = null, $chaine_2 = null){
    if ($chaine_1 != null && $chaine_2 !=null && is_string($chaine_1) && is_string($chaine_2)){
        $chaine_1 = str_split($chaine_1);
        $chaine_2 = str_split($chaine_2);
        $chaine_1 = array_slice($chaine_1, 0, 12);
        $chaine_2 = array_slice($chaine_2, -11);
        $chaine_1 = array_pad($chaine_1, 12, ".");
        $chaine_2 = array_pad($chaine_2, 11, ".");
        foreach($chaine_1 as $key => $value)
        {
        $var1 .= $value;
        } 
        foreach($chaine_2 as $key => $value)
        {
        $var1 .= $value;       
        }
        return $var1;
    }else {
        return false;
    }
}
// var_dump(resum_join_str2("","hahehihohuooooooooooooooo"));
// est-ce que manquante === vide? ==>
// methode 2
/* function resum_join_str2($a = NULL, $b = NULL){
    if ($a === NULL || $b === NULL){
        return FALSE;
    }
    $a20 = substr($a, 0, 20); 
    $b8 = substr($b, -8);     
    $aLen = strlen($a20);      
    $bLen = strlen($b8);
    for ($i = $aLen; $i < 20; $i++){
        $a20 = $a20 . "."; 
    }
    for ($i = $bLen; $i < 8; $i++){
        $b8 = $b8 . "."; 
    }
    return $a20 . $b8;
}
var_dump(resum_join_str2("","hahehihohuooooooooooooooo")); */
?>