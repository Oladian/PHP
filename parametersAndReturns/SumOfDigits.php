<?php

function sumOfDigits($num) {

    if(is_integer($num)){
        $len = strlen($num);
        $sum = 0;

        for($i=0; $i<$len; $i++){
            $sum+=substr($num, $i, 1);
        }

        return $sum;
    }
}

print sumOfDigits(-72);