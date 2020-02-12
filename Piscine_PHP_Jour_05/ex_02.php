<?php
function my_aff_global() {
    foreach($GLOBALS as $key => $value){
         if (gettype($value) == "string"){
         echo $key . " => " . $value . "\n";
    }
    }
}
?>