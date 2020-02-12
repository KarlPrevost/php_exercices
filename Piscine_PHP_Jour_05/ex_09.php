<?php
function post_levenshtein_score(){
    $lev = levenshtein($_POST["str_one"], $_POST["str_two"]);
    if (!isset($lev)){
    return NULL;
    }else {
    return $lev;
    }
}
?>