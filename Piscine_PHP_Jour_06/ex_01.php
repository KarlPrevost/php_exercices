<?php
function my_generate_file($name){
    $file = fopen("$name.txt", 'w');
    if(!$file)
        return false;
        return true;
}
?>