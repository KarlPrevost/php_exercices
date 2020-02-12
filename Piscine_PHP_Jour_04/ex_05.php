<?php 
function print_range(int $min) {
    $uyu = $min;
 do {
        echo "$uyu\n";
        $uyu++;
    }while($uyu <= 42);
    return ($min == 42 ? true : false );
}
?>