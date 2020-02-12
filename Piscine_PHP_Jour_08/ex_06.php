<?php
function str_to_wordtab( $str = NULL, $delim = NULL){
    if ($str === NULL || $delim === NULL || !is_string($str) || !is_string($delim))
    return NULL ;
    else
    return explode($delim, $str);
    }
?>