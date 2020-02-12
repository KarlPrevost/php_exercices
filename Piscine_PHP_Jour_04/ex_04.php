<?php 
    function print_until(int $max){
        $blou =0;
        if($max < 0){
            echo "Boulet !\n";
            return false;
        } while($blou <= $max){
            echo "$blou\n";
            $blou++;
        }
        return true;
    }
?>