<?php 
function str_lower_epur($str = NULL){
    if(!is_string($str) || $str === NULL)
    return NULL;
    $str = preg_replace('/\s\s+/', ' ', $str);  
    $str = trim($str);
    $str = strrev($str);
    $str = strtolower($str);
    $str = ucwords($str);
    $str = strrev($str);
    return $str;
}
?>