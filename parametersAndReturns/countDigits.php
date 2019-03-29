<?php

function countDigits($number) {

    if(is_integer($number)) {
        if ($number < 0)
            return strlen($number) - 1;
        return strlen($number);
    }
}

print countDigits(-38015);