<?php

function binaryToDecimal($num) {
    return bindec($num);
}

print binaryToDecimal(101011);