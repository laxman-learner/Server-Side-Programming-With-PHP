<?php
// comparision operator returns 1 iff condition is true otherwise 0. Only 1 is printed as output 
$a = 10;
$b = 10;
echo $a == $b; // equal to operator : returns 1 if a is equal to b 
echo "<br>";
echo $a === $b; // returns 1 if a and b has equal value and equal type
$a = 15;
echo $a == $b;
echo $a === $b;
echo "<br>";
$b = "15";
echo $a == $b;
echo $a === $b;
$a = 40;
$b = "40"; 
echo $a != $b; // not equal operator : returns 1 if value of a and b is not equal
echo $a <> $b; // not equal operator
echo "<br>";
echo $a !== $b; // returns 1 if a and b has either not equal value or not equal type
$a = 30;
echo "<br>";
echo $a < $b; // returns 1 if a is less than b
echo "<br>";
echo $a <= $b; // returns 1 if a is less than or equal to b
echo "<br>";
echo $a <=> $b; /* spaceship operator : introduced in php version 7 
returns -1 , 0 , 1 if a is less than , equal to or greater
 than b respectively  */
 $a = 40;
 echo "<br>";
 echo $a <=> $b;
 $a = 50;
 echo "<br>";
 echo $a <=> $b;
?>