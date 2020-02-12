<?php
function rev_epur_str($chaine = NULL)
{
    $houloulou = explode(" ", $chaine);
    $houloulou = array_reverse($houloulou);
    $houloulou = implode(" ", $houloulou);
    $houloulou = trim($houloulou);
    $houloulou = preg_replace('/\s\s+/', ' ', $houloulou);

    if ($chaine === NULL)
    {
        return false;
    }  
    return $houloulou;
}
// var_dump(rev_epur_str(" blümelein! kleines    ein blüht   heide   der Auf   "))
?>