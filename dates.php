<?php

$date = new DateTime();

#YMD
echo date("Y-m-d", time());
echo "<br><br>";

#Get the current date in any format
echo date("Y-m-d H:i:s");
echo "<br><br>";

#current day
echo date("d");
echo "<br><br>";

#current month numerical
echo date("m");
echo "<br><br>";

#current minute
echo date("i");
echo "<br><br>";

?>