<?php

# array
$colours = array("blue", "yellow", "orange");
echo $colours[0];
echo "<br>";
var_dump($colours);

echo "<br><br>";

# nums array
$numsArray = array(1,2,3.2,4.4,5);
echo $numsArray[3];
echo "<br>";
var_dump($numsArray);

echo "<br><br>";

# multiple array
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo "<br>";
var_dump($cars);

echo "<br><br>";

# array length count
$sports = array("Football", "Rugby", "Badminton");
echo count($sports);
echo "<br>";
var_dump($sports);

echo "<br><br>";

# array combine

$arr1 = array("Manchester", "Rayo", "Real");
$arr2 = array("City", "Vallecano", "Zaragoza");
$combineArr = array_combine($arr1, $arr2);

print_r($combineArr);
echo "<br>";
var_dump($combineArr);

echo "<br><br>";

# last array item
$drinks = array("Vermu", "Gin", "Whisky");
echo end($drinks);
echo "<br>";
var_dump($drinks);

echo "<br><br>";

# add to array
$series = ["The Boys", "House of Dragon", "Stranger Things"];

$addSeries = array_push($series, "Black Mirror");
print_r($series);
echo "<br><br>";


?>