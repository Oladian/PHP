<?php


function foo($a) {
    print("a = $a\n");
    $a = 160;
}

function bar($c, $b){
    $d = $b - $c;
    print("d = $d\n");
    return $d % 10;
}

$a = 137;
$b = 42;

print("a = $a\n");
foo($b);

print("a = $a\n");
print("a = $b\n");

$a = bar($b, $a+$b);
print("a = $a\n");

$a = bar($a, $b);
print("a = $a\n");