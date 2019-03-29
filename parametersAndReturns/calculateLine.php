<?php

function calculateLine($m, $x, $b){
    return $m*$x+$b;
}

print_r(calculateLine(5,2,4));
echo "<br/>";
print_r(calculateLine(1,2,0));
echo "<br/>";
print_r(calculateLine(1,0.5,2));
