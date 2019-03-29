<?php

function countUnique($n1, $n2, $n3){

    $contador = 3;

    if ($n1 == $n2)
        $contador--;
    if ($n2 == $n3)
        $contador--;
    if ($n1 == $n3)
        $contador--;

    if($n1==$n2 && $n2==$n3)
        $contador=1;

    return $contador;

}

echo  countUnique(1, 3, 1);