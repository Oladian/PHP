<?php

function threeConsecutive($n1, $n2, $n3) {

    $array = array($n1, $n2, $n3);
    sort($array);

    if(($array[2]-1==$array[1]) && ($array[1]-1==$array[0]))
        return true;
    else
        return false;

}

var_dump(threeConsecutive(4, 5, 3));