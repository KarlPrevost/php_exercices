<?php
function cesar2($chaine){
    $chaine = strtolower($chaine);
    $len = strlen($chaine);
    for($i = 0; $i < $len; $i++){
        $val = $chaine[$i];
        if($val === "y"){
            $chaine[$i] = str_replace("y", "a",$chaine[$i]);
        }
        elseif ($val === "z"){
            $chaine[$i] = str_replace("z", "b",$chaine[$i]);
        } else {
        $chaine[$i] = ++$val;
        $chaine[$i] = ++$val;
        }
    }
echo $chaine . "\n";
}
?>