<?php

function print_triangle() {
    for ($i=6; $i>0;$i--){
        for ($j=$i;$j<6;$j++){
            echo "#";
        }
        echo "\n";
    }
}

print (print_triangle());