<?php

// checkdate(month,day,year) => returns true i.e. 1 if valid date is passed to it , otherwise returns false i.e. 0

echo checkdate(2,15,2030);

echo "<br>". checkdate(2,29,2004); // February month of leap year has 29 days and normal february month contains 28 days

echo "<br>". checkdate(2,28,2001);

$date1 = date_create("2013-03-15");
$date2 = date_create("2013-12-12");

$diff = date_diff($date1,$date2); // returns the object and here date1 is greater than date2

echo "<pre>";
print_r($diff);
echo"</pre>";

// to print the days only of $diff object

echo $diff->days." days";

echo "<br>".$diff->format("%r%a days"); // alternative way only add -ve sign if date 1 is less than date 2

$date1 = date_create("2013-12-15");
$date2 = date_create("2013-03-12");

$diff = date_diff($date1,$date2); 
// returns the object  here date1 is less than date2 and by default this function return  positive value

echo "<br>".$diff->format("%R%a days"); // returns the both positive and return value and format() is inbuilt function

echo "<br>".$diff->format("%R%a %m days");  //  returns the 'm' key  of returned object 

?>