<?php


function computeDistance($x1, $y1, $x2, $y2) {


    return sqrt((pow($x1 - $x2, 2)+pow($y2-$y1,2)));
}

print(computeDistance(10.0, 2.0, 3.0, 5.0));
