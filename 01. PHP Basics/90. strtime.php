<?php

// strtotime() and strftime() functions in php

echo(strtotime("now")); // return current time and date

// for readibility 

echo "<br>".date("d-m-Y",strtotime("now"));

echo "<br>".date("d-m-Y",strtotime("3 march 2005"));

echo "<br>".date("d-m-Y H:m",strtotime("+5 hours"));

echo "<br>".date("d-m-Y H:m",strtotime("+1 week"));

echo "<br>".date("d-m-Y H:m:s",strtotime("+1 week 3 days 7 hours 5 minutes"));

echo "<br>".date("d-m-Y H:m:s",strtotime("next monday"));

echo "<br>".date("d-m-Y H:m:s",strtotime("last monday"));

echo "<br>".date("d-m-Y H:m:s",strtotime("first day of last month"));

// strftime()

echo "<br>".strftime("%B %d %Y, %X %Z");

// old time
echo "<br>".strftime("%B %d %Y, %X %Z",mktime(21,30,0,05,18,2005));  // returns the date in string













?>