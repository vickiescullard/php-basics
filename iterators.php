<?php

#for loop
for($forLoop = 0; $forLoop <= 5; $forLoop++){
    echo $forLoop;
}
echo "<br><br>";

#foreach - times a value by 2
$array = array(1, 2, 3, 4);
foreach ($array as &$value) {
    $value = $value * 2;
    echo $value;
}
echo "<br><br>";

#while loop
$number = 1;
while($number <= 5){
    echo $number;
    $number++;
}

echo "<br><br>";

#do while loop
$nums = 1;
do{
    echo $nums;
    $nums++;
}
while($nums <=5);
echo "<br><br>";

?>