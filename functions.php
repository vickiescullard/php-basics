<?php

# returns the + sum
$num1 = 10;
$num2 = 20;

function add($num1, $num2){
    return $num1 + $num2;
}
echo add($num1, $num2);
echo "<br><br>";

# returns the * sum
function multiply($num1, $num2){
    return $num1 * $num2;
}
echo multiply($num1, $num2);
echo "<br><br>";

# returns the / sum
function divide($num1, $num2){
    return $num1 / $num2;
}
echo divide($num1, $num2);
echo "<br><br>";

# returns the sum of an operator
function subtract($num1, $num2){
    return $num1 - $num2;
}
echo subtract($num1, $num2);
echo "<br><br>";

?>