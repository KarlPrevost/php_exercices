<?php 
function  which_is_longer($str1 = NULL, $str2 = NULL){
    $l1 = strlen($str1);
    $l2 = strlen($str2);
    if ($str1 === NULL || $str2 === NULL){
        if($str1 === NULL )
        return $l2;
        return $l1;
    }
    if(!is_string($str1) || !is_string($str2))
    return -1;
    if ($l1 > $l2)
    return $l1;
    return $l2;
}
?>