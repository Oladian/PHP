<?php

function printPay($salary, $hours) {

    $salarySaved=0;
    $salaryEightHours = $salary*8;

    if($hours>8){
        for($i=8; $i<$hours; $i++){
            echo $i . "<br>";
            $salarySaved += $salary*1.5 ;
        }
    }


    echo number_format(($salaryEightHours+$salarySaved), 2);
}

print printPay(10.00, 11);