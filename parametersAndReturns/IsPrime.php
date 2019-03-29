<?php

function isPrimeNumber($num){
    if($num==1)
        return "No es primo";

    for ($i=2; $i<=$num/2; $i++){
        if($num%$i==0){
            return "No es primo";
        }
    }

    return "Es primo";
}

print isPrimeNumber(332641);