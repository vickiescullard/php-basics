<?php

#boolean
$boolean = true;
echo "This boolean variable is $boolean.<br>";
var_dump($boolean);
echo "<br><br>";

# integer
$number = 5; #variable name and value
echo "This integer var is $number<br>";
var_dump($number);
echo "<br><br>";

# float
$float = 9.3;
echo "This float var is $float";
var_dump($float);
echo "<br><br>";

# string
$text = "text";
echo "This is a string variable called $text.<br>";
var_dump($text);
echo "<br><br>";

# array
$colours = array("blue", "yellow", "orange");
echo "This array is $colours[0].<br>";
var_dump($colours);
echo "<br><br>";

# object
$cars = (object)["car1"=>"Mazda", "car2"=>"Honda"];
echo "This is an object variable: $cars->car1<br>";
var_dump($cars);
echo "<br><br>";

# null
$nothing = NULL;
echo "This is a null variable $nothing";
var_dump($nothing);
echo "<br><br>";

?>