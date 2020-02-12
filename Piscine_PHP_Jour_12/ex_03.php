<?php

function rev_epur_str($chaine = NULL)
{
    $tab = explode(" ", $chaine);
    $tab = array_reverse($tab);
    $tab = implode(" ", $tab);
    $tab = preg_replace('/\s\s+/', ' ', $tab);

    if ($chaine === NULL)
    {
        return false;
    }  
    return $tab;
}
?>