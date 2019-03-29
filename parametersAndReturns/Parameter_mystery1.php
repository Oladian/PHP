<?php

function mystery($x, $z, $y) {
    print("$z, " . ($y - $x) . "\n");
}

$x = 9;
$y = 2;
$z = 5;

mystery($x, $y, $z);
echo "<br>";
mystery($y, $x, $z);