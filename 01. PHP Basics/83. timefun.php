<?php

echo "Hour is : ".date('h')."<br>"; // returns 01 to 12
echo "Hour is : ".date('H')."<br>"; // returns 00 to 23
echo "Hour is : ".date('g')."<br>"; // returns 1 to 12
echo "Hour is : ".date('G')."<br>";  // return 0 to 23


echo "Minute is : ".date('i')."<br>";  // return 00 to 59

echo "Second is : ".date('s')."<br>";  // return 00 to 59


echo "Meridian is : ".date('A')."<br>";  // return AM or PM
echo "Meridian is : ".date('a')."<br>";  // return am or pm


echo "Time is : ".date('h:i:s:a')."<br>";   // this doesn't return system time but server time
echo "Time and Date is : ".date('d-m-Y h:i:s:a')."<br>";  

// to see the defaukt timezone
echo "Time and time is : ".date('h:i:s:a e')."<br>";  

// to change time zone

date_default_timezone_set("Asia/Pontianak");

echo "Time is : ".date('h:i:s:a e')."<br>";


?>