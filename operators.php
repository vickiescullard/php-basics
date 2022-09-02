<?php

# operators
$num1 = 5;
$num2 = 10;
echo $num1 * $num2;
echo "<br><br>";
echo $num1 - $num2;
echo "<br><br>";
echo $num1 + $num2;
echo "<br><br>";
echo $num1 % $num2;
echo "<br><br>";
echo $num1 / $num2;
echo "<br><br>";
var_dump($num1, $num2);
echo "<br><br>";

#comparison operators
$x = 10;
echo $x;
echo "<br><br>";

$y = 20;
echo $x += $y;
echo "<br><br>";

$z = 5;
echo $z %= $y;
echo "<br><br>";
var_dump($x, $y, $z);
echo "<br><br>";

#logical operators
$a = 20;
$b = 50;
$c = 100;

if($a !== $b && $a !== $c || $b !== c) {
    echo "A, B, and C are different values";
}
echo "<br><br>";
var_dump($a, $b, $c);

?>