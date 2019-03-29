<?php

function printTriangle($size) {
    for ($i = $size; $i >= 1; $i--) {
        for ($j = 1; $j < $i; $j++) {
            echo " ";
        } for ($k = $size; $k >= $i; $k--) {
            echo "*";
        }
        echo "\n";
    }
}

print( printTriangle(3) );
