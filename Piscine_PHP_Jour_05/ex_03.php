<?php
function my_add_to_cookie($key, $value){
     setcookie($key, $value . "toto");
}
?>