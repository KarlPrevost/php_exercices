<?php
function resum_join_str($a = NULL, $b = NULL){
    if ($a === NULL || $b === NULL){
        return FALSE;
    }
    $a14 = substr($a, 0, 14); 
    $b3 = substr($b, -3);     
    $aLen = strlen($a14);      
    $bLen = strlen($b3);
    for ($i = $aLen; $i < 14; $i++){
        $a14 = $a14 . "."; 
    }
    for ($i = $bLen; $i < 3; $i++){
        $b3 = $b3 . "."; 
    }
    return $a14 . $b3;
}
var_dump(resum_join_str("","hahehihohuooooooooooooooo"));

?>