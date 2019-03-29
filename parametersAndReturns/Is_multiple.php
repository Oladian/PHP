<?php

function isMultiple($a, $b){

    if ($a<0 && $b<0){
        if ($a%$b==0){
            return true;
        } else {
            return false;
        }
    } elseif($a>=0 && $b>=0) {
        //throw new Exception("Números no negativos o 0");
        echo "Números no negativos o 0";
        return false;
    }
}

var_dump(isMultiple(-15, -5));

var_dump(isMultiple(-16, -3));

var_dump(isMultiple(16, 0));

echo true;