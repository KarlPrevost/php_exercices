<?php
function my_facto_rec($nbr = NULL){
    if (!is_int($nbr) || $nbr <= -1)
    return NULL;
    if ($nbr == 0)
    return 1;
    return $nbr*my_facto_rec($nbr-1);
}
?>