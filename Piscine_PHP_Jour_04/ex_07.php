<?php 
function aff_array($my_array)
{
    foreach ($my_array as $value)
    {
        echo "$value\n";
    }
    return count($my_array);
}
?>