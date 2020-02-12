<?php 

function get_angry_bird($nbr)
{
    $yut = "";
    for($pie = 1; $pie <= $nbr ;$pie++)
    {
        $yut = $yut . "piou";
    }
    $yut = $yut . "\n";

    return $yut;
}
?>
