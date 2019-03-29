<?php


function sumOfRange($min, $max){

    if($max<$min) return 0;
    $sum = 0;
    for($i=$min; $i<=$max; $i++){
        $sum += $i;
        if($i!=$max)
            echo $i . " + ";
        else
            echo $i . " = ";
    }

    echo $sum;
}

print  sumOfRange(5, 6);