<?php

function factorCount($n){
    if(is_integer($n)){
        if($n>=0) {
            $counter=0;

            for ($i=1; $i <= sqrt($n); $i++){
                if($n%$i==0){
                    if ($n/$i==$i)
                        $counter++;
                    else
                        $counter+=2;
                }
            }

            return $counter;

        } else {
            throw new Exception("Error: parameter value must be non-negative.");
        }
    }
}

print factorCount(24);