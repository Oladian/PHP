<?php

function circleArea($radio) {
    if($radio>0) {
        return pi()*(pow($radio, 2));
    } else {
        echo "Número negativo";
    }
}

print_r(circleArea(-2.0));