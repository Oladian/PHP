<?php

function numberSquare($min, $max) {
    for ($i = $min; $i < $max; $i++) {
        for ($j = $i; $j <= $max; $j++) {
            echo $j;
        }
        for ($j = $i - 1; $j >= 1; $j--) {
            echo $j;
        }
        echo "\n";
        //echo "<br>";
    }
}

print numberSquare(1, 5);