<?php 
function colle($x, $y){
    $tempX = $x-2;
    $tempY = $y-2;

    if($x > 0 && $y > 0) {
        echo "o";
        for($i = 0; $i < $tempX; $i++ ){
            echo "-";
    }
    if($x > 1 ){
    echo "o";
    }
    }

        if($y == 2){
            echo "\n";
        }
    
        
        if($y > 2){ 
        echo "\n";
        for($e = 0; $e < $tempY; $e++){
            echo "|"; 
            for($r = 0; $r < $tempX; $r++) {
                echo " ";
            }
            if($x > 1) {
                echo "|";
            }
            echo "\n";
        } 
    }  
    
    
    
    if($y > 1){
    echo "o";
    
        for($i = 0; $i < $tempX; $i++ ){
            echo "-";
    }
    if( $x >= 2){
    echo "o";
    }
    }
    
echo "\n";
}

colle(2, 10);
?>