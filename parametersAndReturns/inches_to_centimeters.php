<?php

function inchesToCentimeters($pies, $pulgadas) {
    return ($pies*12+$pulgadas)*2.54;
}

print_r(inchesToCentimeters(5, 11));