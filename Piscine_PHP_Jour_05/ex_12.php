<?php
function get_execution_time(){
    $temps_execution = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
    $temps_execution = number_format($temps_execution, 7);
    return $temps_execution;
}
?>