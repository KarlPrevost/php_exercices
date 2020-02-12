<?php 
    function print_age(int $age){
        if($age <= 0){
            echo "Enfantillage...\n";
        } else { 
            echo $age == 42 ? "the answer.\n" : "je peux aller en boite\n"; 
        }
    }
?>