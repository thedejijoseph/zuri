<?php

function opAddition($var1, $var2){
    $result = $var1 + $var2;
    echo $result, "\n";
}

function opSubtraction($var1, $var2){
    $result = $var1 - $var2;
    echo $result, "\n";
}

function opMultiplication($var1, $var2){
    $result = $var1 * $var2;
    echo $result, "\n";
}

function opDivision($var1, $var2){
    $result = $var1 / $var2;
    echo $result, "\n";
}

function opModulus($var1, $var2){
    $result = $var1 % $var2;
    echo $result, "\n";
}


opAddition(3, 4);
opSubtraction(5, 3);
opMultiplication(2, 6);
opDivision(8, 4);
opModulus(9, 4);

?>