<?php

$date = date_create("2015-05-15");

date_time_set($date,13,20);  // add the time in existing and modifies the existing date

// displaying the modified date with time 
echo date_format($date, "d-m-Y H:i:s");


date_time_set($date,05,20,45);

echo "<br>".date_format($date, "d-m-Y H:i:s");

?>