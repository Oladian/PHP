<?php

function getFirstDigit($number) {

    if (is_integer($number)) {
       if ($number<0) {
           return substr($number, 1, 1);

       } else {
           return substr($number, 0, 1);
       }
    }

}

print(getLastDigit(3535));