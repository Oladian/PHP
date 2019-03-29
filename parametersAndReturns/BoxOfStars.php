<?php


function boxOfStars($filas, $columnas) {
    for ($i=0; $i<$filas;$i++){
        for ($j=0; $j<=$columnas;$j++){
            if($i == 0 || $i == $filas -1 || $i == $filas) {
                echo "*";
            } else {
                if($j==0 || $j == $columnas) {
                    echo "*";
                } else {
                    print "\x20";
                    //echo "_";
                }
            }
        }
        echo "\n";
        echo "<br/>";
    }
}

print boxOfStars(15, 2);