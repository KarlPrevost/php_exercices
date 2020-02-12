<?php 
function my_print_session($key){
if (isset($_SESSION)){
    echo $_SESSION[$key] . "\n\n";
}
}
?>