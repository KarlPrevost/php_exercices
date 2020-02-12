<?php

function sum_rec_neg($nbr = NULL, $iteration = NULL){
    if ($nbr === NULL || $iteration === NULL || !is_int($nbr) || !is_int($iteration)) 
        return NULL;
        if ($iteration <= 0){
            if ($iteration === 0)
                return -1;
                return $nbr + sum_rec_neg($iteration, $iteration+1);
            }
}

function sum_rec($nbr = NULL, $iteration = NULL){
    if ($nbr === NULL || $iteration === NULL || !is_int($nbr) || !is_int($iteration)) 
        return NULL;
    if ($iteration >= 0){
        if ($iteration === 0)
            return 1;
            return $nbr + sum_rec($iteration, $iteration-1);
        }
    if ($iteration < 0){
            return sum_rec_neg($nbr, $iteration);
        }

}

var_dump(sum_rec(5,0));
?>