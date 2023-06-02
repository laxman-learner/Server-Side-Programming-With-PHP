<?php

// php date() function

echo "Today is : " . date('d')."<br>"; // returns 1 as 01 and same upto 9
echo "Today is : " . date('j')."<br>";  // returs 1 as 1
echo "Today is : " . date('s')."<br>";

echo "Month is : " . date('F')."<br>"; // returns full month name
echo "Month is : " . date('m')."<br>"; // returns  05 for 5
echo "Month is : " . date('M')."<br>"; // returns only three letter of month i.e. Jan for January
echo "Month is : " . date('n')."<br>"; //  return 1 for 1

echo "Year is : " . date('y')."<br>";  // returns only last two digit for year. i.e. 22 for 2022
echo "Year is : " . date('Y')."<br>";  //returns all  digit for year. i.e. 2022 for 2022

echo "Week  Day is : " . date('D')."<br>";  // returns only three letters i.e. Tue for Tuesday
echo "Week  Day is : " . date('l')."<br>";  // returns full week  Day name
echo "Week  Day is : " . date('N')."<br>"; // starts counting from Monday and return 1 for Monday
echo "Week  Day is : " . date('w')."<br>"; // starts counting from Sunday and retrun 0 for Sunday


// different ways to display the date
echo "Full Date is : " . date('d/m/Y')."<br>";
echo "Full Date is : " . date('d-m-Y')."<br>";
echo "Full Date is : " . date('Y-m-d')."<br>";
echo "Full Date is : " . date('Y-M-d')."<br>";

echo "Day : " . date('z')."<br>"; // returns the today's day number among 365

echo "Week of Year : " . date('W')."<br>"; // returns the current week

echo "Days of the current month : " . date('t')."<br>"; 

echo "Is this Leap Year : " . date('L')."<br>"; // returns the leap year or not
?>