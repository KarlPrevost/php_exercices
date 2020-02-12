<?php 
function colle($x, $y){
    $tempX = $x-2;
    $tempY = $y-2;


    if($x == 1 || $y == 1){
        if($y > 1){
        for($i = 0; $i < $y; $i++){
            echo "B\n";
        }
    }   if($x > 1){
        for($i = 0; $i < $x; $i++){
            echo "B";
        }
    }         if($x = 1 && $y = 1){
        echo "B";
    }
    echo "\n";

    }else {


    if($x > 0 && $y > 0) {
        echo "A";
        for($i = 0; $i < $tempX; $i++ ){
            echo "B";
    }
    if($x > 1 ){
        echo "C";
    }
    }

        if($y == 2){
            echo "\n";
        }
    
        
        if($y > 2){ 
        echo "\n";
        for($e = 0; $e < $tempY; $e++){
            echo "B"; 
            for($r = 0; $r < $tempX; $r++) {
                echo " ";
            }
            if($x > 1) {
                echo "B";
            }
            echo "\n";
        } 
    }  
    
    
    
    if($y > 1){
    echo "A";
    
        for($i = 0; $i < $tempX; $i++ ){
            echo "B";
    }
    if( $x >= 2){
    echo "C";
    }
    }
    
echo "\n";
}
}
?>