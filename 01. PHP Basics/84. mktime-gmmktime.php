<?php

// mktime and gmmktime() => used to show the past date
echo "Time and Date : ". date("d-m-Y h:i:sa")."<br>";

// date(format,timestamp) => using timestamp()

echo date("l",mktime(0,0,0,10,15,2003));  

echo "<br>".date("d-m-Y",mktime(0,0,0,10,15,2003));   // shows the date according to the timezone set 


echo "<br>".date("d-m-Y",gmmktime(0,0,0,10,15,2003));   // always shows the time set in server










?>