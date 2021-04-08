<?php

function opAddition($var1, $var2){
    $result = $var1 + $var2;
    return $result;
}

function opSubtraction($var1, $var2){
    $result = $var1 - $var2;
    return $result;
}

function opMultiplication($var1, $var2){
    $result = $var1 * $var2;
    return $result;
}

function opDivision($var1, $var2){
    $result = $var1 / $var2;
    return $result;
}

function opModulus($var1, $var2){
    $result = $var1 % $var2;
    return $result;
}

// since I still don't know how to get input from the command line..
$var1 = 9;
$var2 = 5;

echo("Implementing the following operations on two variables: $var1 & $var2 \n");
echo("Addition (+): ".opAddition($var1, $var2)."\n");
echo("Subtraction (-): ".opSubtraction($var1, $var2)."\n");
echo("Multiplication (*): ".opMultiplication($var1, $var2)."\n");
echo("Division (/): ".opDivision($var1, $var2)."\n");
echo("Modulus (%): ".opModulus($var1, $var2)."\n");

?>
