<?php

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j < $i; $j++) {
        echo " ";
    } for ($k = 5; $k >= $i; $k--) {
        echo "*";
    }
    echo "</br>";
}