<?php


for ($i = 1; $i < 6; $i++){
    for ($j = $i; $j <= 6; $j++){
        echo $j;
    }
    for ($j = $i-1; $j >= 1; $j--) {
        echo $j;
    }
    echo '<br/>';
}