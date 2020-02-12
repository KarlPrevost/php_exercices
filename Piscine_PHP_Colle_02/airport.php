<?php
$message = $argv[1];   //recuperation de la 2eme valeur du tableau qui correspond au parametre
$len = strlen($message); // on recup la longueur du message
$a = 0;
for($i= 30; $i <= $len; $i++){  // pour $i = 30 tant que $i < longueur du message, i++
   if($i < $len){
    print_r(substr($message,$i-30, 30));
    echo "\n";
    $f = 0;
    $clear = shell_exec("clear");
    $sleep = shell_exec("sleep 0.5");
    echo $clear;
    echo $sleep;
 //   } if($i >= $len) {
    //     for($e = 30; $e > 0; $e--){
    //   print_r(substr($message, $i-30, $e));
    //   print_r(substr($message, 0, $f));   
    //  $f = $f+1;
    //  $i = $i+1;
  //      }
//      $clear = shell_exec("clear");
//      $sleep = shell_exec("sleep 0.5");
//      echo $clear;
//      echo $sleep;
       }
}
// print_r(substr($message, 1, 31));
// $print = substr($argv, 0, 30); 
// echo $print;
// $clear = shell_exec("clear");
// $sleep = shell_exec("sleep 0.5");
// echo $clear;
// echo $sleep;
// echo $print++;
?>