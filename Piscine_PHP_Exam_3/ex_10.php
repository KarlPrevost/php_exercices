<?php
$argv = array_slice($argv,1);
foreach($argv as $key => $value){
    $string = md5($value);
    echo $string . "\n";
}
?>