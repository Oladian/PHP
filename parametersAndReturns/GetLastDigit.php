<?php


function getLastDigit($number) {

    if (is_integer($number)) {
        return substr($number, strlen($number)-1, 1);
    }

}

print(getLastDigit(3535));