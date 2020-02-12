<?php
function clear_and_replace($string, $word){
    $string = trim($string); // enleve les espaces au debut et a la fin
    $replace = "Pangolin";  
    $hhh = preg_replace ("/$word/", $replace ,$string, 2);
    return $hhh; 
}
// var_dump(clear_and_replace("Salut le chat, le chien et le raton laveur", "le"));
?>