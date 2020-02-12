<?php 
function colle($x, $y){
    $tempX = $x-2;
    $tempY = $y-2;


    if($x == 1 || $y == 1){
        if($y > 1){
        for($i = 0; $i < $y; $i++){
            echo "*\n";
        }
    }   if($x > 1){
        for($i = 0; $i < $x; $i++){
            echo "*";
        }
    }
        if($x = 1 && $y = 1){
            echo "*";
        }
        echo "\n";

    }else {


    if($x > 0 && $y > 0) {
        echo "/";
        for($i = 0; $i < $tempX; $i++ ){
            echo "*";
    }
    if($x > 1 ){
    echo "\\";
    }
    }

        if($y == 2){
            echo "\n";
        }
    
        
        if($y > 2){ 
        echo "\n";
        for($e = 0; $e < $tempY; $e++){
            echo "*"; 
            for($r = 0; $r < $tempX; $r++) {
                echo " ";
            }
            if($x > 1) {
                echo "*";
            }
            echo "\n";
        } 
    }  
    
    
    
    if($y > 1){
    echo "\\";
    
        for($i = 0; $i < $tempX; $i++ ){
            echo "*";
    }
    if( $x >= 2){
    echo "/";
    }
    }
    
echo "\n";
}
}
?>