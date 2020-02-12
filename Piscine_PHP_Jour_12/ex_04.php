<?php

function resum_join_str(string $chaine_1, string $chaine_2)
{
    {
        if (isset($chaine_1, $chaine_2))
        {
            $chaine_1 = str_split($chaine_1);
            $chaine_2 = str_split($chaine_2);
            $chaine_1 = array_slice($chaine_1, 0, 12);
            $chaine_2 = array_slice($chaine_2, -8);
            $chaine_1 = array_pad($chaine_1, 12, ".");
            $chaine_2 = array_pad($chaine_2, 8, ".");
            foreach($chaine_1 as $key => $value)
            {
            $var1 .= $value;
            } 
            foreach($chaine_2 as $key => $value)
            {
            $var1 .= $value;       
            }

            return $var1;
        }
        else{
            return false;
        }
    }
}
?>