<?php
function my_mail($mail){
    $eMail = explode("@", $mail);
    $nb = count($eMail);
    if ($nb > 2 || $nb < 2){
        return;
    } else {
        $blop = explode(".", $eMail[1]);
        array_pop($blop);
        $blop = implode(".", $blop);
        echo $blop . "\n";
    }
}

var_dump(my_mail("jimcarter@jh.kj@kli.com"))
?>