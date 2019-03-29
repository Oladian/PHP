<?php

$f = "2019-3-16";
$fecha = date("Y-m-d", strtotime($f));

print_r ( $fecha . "\n" );

print_r ( getdate(time()) );

print_r( localtime(time()) );