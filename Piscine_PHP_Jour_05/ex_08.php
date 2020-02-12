<?php 
function helix_post_finder(){
    if(!isset($_POST["phelix"])){
        return NULL;
    } else {
        return $_POST["phelix"];
    }
}
?>