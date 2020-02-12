<?php 
function min_len_array($myArray){
uksort($myArray, create_function('$a,$b', 'return strlen($a) > strlen($b);'));
    return array_shift($myArray);
}
?>


