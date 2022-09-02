<?php

# print text string
$str = "I love cats";
echo $str;
echo "<br><br>";

# text string that interprets values
$num = 5;
$location = 'tree';

$format = 'There are %d monkeys in the %s';
echo sprintf($format, $num, $location);
echo "<br><br>";

# concatinate strings
$data1 = "My favourite colour is";
$data2 = "blue";

echo $data1, " ", $data2;
echo "<br><br>";

# string replace case sensitive
$myStr = "I support Manchester City and I like to drink gin.";

$myStr2 = str_replace("gin", "vermu", $myStr);
echo print_r($myStr2);
echo "<br><br>";

# string replace
$myStr3 = "I support Manchester City and I like to drink vermu.";

$myStr4 = str_ireplace("VERMU", "gin", $myStr3);
echo print_r($myStr4);
echo "<br><br>";

# repeted string
$rep = "Manchester City ";
print_r(str_repeat($rep, 5));
echo "<br><br>";

# length of string
$strLength = "Man City";
echo strlen($strLength);
echo "<br><br>";

# position of the first occurance of a text
$firstText = "I support Manchester City and I like to drink vermu.";
echo strpos($firstText, "Manchester");
echo "<br><br>";

# string to uppercase
$toUpper = "hello world";
echo strtoupper($toUpper);
echo "<br><br>";

# string to lowercase
$toLower = "HELLO WORLD";
echo strtolower($toLower);
echo "<br><br>";

# substring from a given permission
$subStr = "Manchester";
$subStr2 = "City";
echo substr($subStr, 0, 3);
echo " $subStr2";

?>