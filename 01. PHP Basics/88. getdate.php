<?php

echo "<pre>";
print_r(getdate()); // returns associative array of current date and current time
echo "</pre>";

// to print particualar value of associative array returned by getdate()

$date = getdate();
echo "<br>".$date["month"];  // returns month

echo "<br>".$date["month"]." - ".$date["year"];  // returns month and year

$olddate = mktime(0,0,0,03,15,2015);  // creating timestamp
echo "<pre>";
print_r(getdate($olddate)); // returns associative array of old date which is passed as timestamp and current time
echo "</pre>";

$date = getdate($olddate);
echo "<br>".$date["month"];  // returns month

echo "<br>".$date["month"]." - ".$date["year"];  // returns month and year of old year


echo "<pre>";
print_r(gettimeofday()); // returns associative array of current time and parameter is by default false
echo "</pre>";

// to print particualar value of associative array returned by getdate()

$date = gettimeofday();
echo "<br>".$date["sec"];  // returns month

echo "<br>".$date["sec"]." - ".$date["minuteswest"];  // returns month and year

echo "<br>".gettimeofday(true); // returns the time in float


echo "<pre>";
print_r(localtime()); // returns indexed array of current time and current date of local server
echo "</pre>";

// to print in readable form

echo "<pre>";
print_r(localtime(time(),true)); 
// returns associative array of current time and current date of local server and month starts from 0
echo "</pre>";
 
// to use timestamp

$olddate = mktime(0,0,0,03,15,2015);

echo "<pre>";
print_r(localtime($olddate,true));
 // returns associative array of current time and current date of local server according to timestamp
echo "</pre>";

?>