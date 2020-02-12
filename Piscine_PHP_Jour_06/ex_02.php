<?php 
function my_cat_files($path){
    $separator = "_____\n";
    $nb = func_num_args();
    $argArray = func_get_args();
    for($i = 0; $i < $nb; $i++){
       $contents[$i] = file_get_contents($argArray[$i]);
    }
    $finalForm = join($separator, $contents);
 return $finalForm;
}
?>