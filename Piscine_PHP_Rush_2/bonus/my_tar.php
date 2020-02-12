<?php
/*
BONUS
_ _ _ _ _ _ _ _ _ _ _
Rendu : Piscine_PHP_Rush_2/bonus
Meilleur sera le taux de compression de votre archive, plus votre Rush sera réussi ! Vous devez à présent
commencer à réfléchir aux différentes façons d’optimiser la taille de votre archive et la vitesse de compres-
sion.
Pour chaque amélioration apportée à ce processus et présentées en soutenance, des points bonus vous
seront accordés.
Définitiondela“compression”:https://fr.wikipedia.org/wiki/Compression_de_donn%C3%A9es
Comparaison des compressions : http://rlwpx.free.fr/WPFF/comploc.htm
*/
$files = array_slice($argv, 1);
$filesNotFound = array_filter($files, function($value) { // put the non existing files in an array
    return file_exists($value)  === false;
});
$filesNotFound = array_values($filesNotFound); // reindex
if(count($filesNotFound) >= 1) { // could not find one of the specified files
    echo("\033[34mCould not find \"$filesNotFound[0]\"\033[0m");
    exit();
}