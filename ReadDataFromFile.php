<?php

$name_file = '326mar.txt';

$file = fopen($name_file, 'r');

if (file_exists($name_file)) {
    while (!feof($file)){
        echo fgetc($file);
    }
}


fclose($file);

$lineas = file('26mar.txt');

foreach ($lineas as $num_linea => $linea ) {
    echo "Linea # " . $num_linea . ": " . $linea . "<br/>";
}
