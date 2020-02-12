<?php 
    function print_array_with_key($my_array){
        foreach ($my_array as $key => $coolarr) {
        echo "$key". " : " ."$coolarr\n";
    }
}
?>