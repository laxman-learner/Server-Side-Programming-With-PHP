<?php

// datecreate(time,timezone) => second parameter is optional and used to create past or future date

$date = date_create("2024-03-15");  // this function returns the object

// to show the time of this date date_format() function is used: date_format(object,format)


echo date_format($date,"l")."<br>";
echo date_format($date,"d/m/Y")."<br>";
echo date_format($date,"d/m/Y  H:i:s")."<br>";


$date = date_create("2024-03-15 22:25:00");

echo date_format($date,"d/m/Y  H:i:s")."<br>";

$date = date_create("2013-03-15 22:25:00");

echo date_format($date,"d/m/Y  H:i:s")."<br>";

// using timezone as second parameter

$date = date_create("2024-03-15 22:25:00",timezone_open("Asia/Kolkata")); // no any differece using second parameter

echo date_format($date,"d/m/Y  H:i:s")."<br>";
?>