<?php

//Affiche tout les nombres premiers entre 0 et $n
function affichePremiers($n){
    $negatif = false;
    if($n<0){
        $negatif = true;
        $n = -$n;
    }
    //On prend chaque nombre entre 2 et n
    for($i=2;$i<=$n;$i++){
        $nbDiv = 0;// on compte le nombre de diviseur    
        for($j=1;$j<=$i;$j++){
            if($i%$j==0){
                $nbDiv++;            
            }
        }
        if($nbDiv == 2){
//Un nombre premier est un chiffre qui ne possède que 2 diviseur (1 et
// lui-même)
            if($negatif){
                echo "-";
            }
            echo $i."\n ";
        }
    }
}

$fichier =  fopen("fichier.txt","w+");
$texte = print_r(affichePremiers(100));
fwrite($fichier,$texte);

// var_dump(affichePremiers(100));
// echo "<br />";
// affichePremiers(100);


?>