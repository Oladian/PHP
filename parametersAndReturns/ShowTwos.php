<?php

function showTwos($num) {

    $value = $num;
    $counter = 0;

    while ($value%2==0){
        $counter++;
        $value/=2;
    }

    echo $num .  " = ";

    for ($i = 0; $i < $counter; $i++){
        echo "2 * ";
    }

    echo $value;
}

print showTwos(5);