<?php

for ($i=0; $i<8;$i++){
    for ($j=0; $j<6;$j++){
        if($i==0 || $i==7) {
            echo "*";
        } else {
            if ($j==1 || $j==2 || $j==3 || $j==4){
                echo "_";
            } else {
                echo "*";
            }
        }
    }
    echo "</br>";
}

/*
for ($i=0; $i<8;$i++){
    for ($j=0; $j<6;$j++){
        if($i==0 || $i==7) {
            echo "*";
        } else {
            if ($j==1 || $j==2 || $j==3 || $j==4){
                print "\x20";
            } else {
                echo "*";
            }
        }
    }
    print "\n";
}*/