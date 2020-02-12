<?php
    function multiples(int $nb){
        for($x = 1; $x <= 200000; $x++){
            if($x%$nb == 0){
            echo $x . "\n";
        }
    }
    }
?>