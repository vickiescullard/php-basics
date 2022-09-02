<?php

#Monday
date("w");

if(date("w") == 1){
    echo "We are on Monday";
} else {
    echo "Nothing to see here";
}
echo "<br><br>";

#October
date("m");

if(date("m") == 10){
    echo "We are in October";
} else {
    echo "Nothing to see here";
}
echo "<br><br>";

#double condition
date("i");

if(date("i") < 10) {
    echo "The current minute is less than 10";
} else if (date("i") > 15) {
    echo "The current minute is more than 15";
} else {
    echo "Does not meet any conditions";
}
echo "<br><br>";

#switch day
$day = date("l");
switch($day) {
    case 'Saturday':
        echo "Today is Saturday.";
        break;

    case 'Sunday':
        echo "Today is Sunday.";
        break;

    case 'Monday':
        echo "Today is Monday.";
        break;

    case 'Tuesday':
        echo "Today is Tuesday.";
        break;

    case 'Wednesday':
        echo "Today is Wednesday.";
        break;

    case 'Thursday':
        echo "Today is Thursday";

    case 'Friday':
        echo "Today is Friday. Pass me the gin.";
        break;

    default: echo "I don't know what day it is.";
}

echo "<br><br>";
?>