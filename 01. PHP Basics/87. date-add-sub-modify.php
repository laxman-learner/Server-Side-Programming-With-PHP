<?php

// date_add(object,interval) , date_sub(object,intrval) and date_modify(object,modify) functions
$date = date_create("2015-05-15");

date_add($date,date_interval_create_from_date_string("30 days")); // add the 30 days to passed date

echo date_format($date,"d-m-Y");

date_add($date,date_interval_create_from_date_string("10 days"));

echo "<br>".date_format($date,"d-m-Y");


date_sub($date,date_interval_create_from_date_string("20 days")); // subtract 20 days from passed date

echo "<br>".date_format($date,"d-m-Y");

date_modify($date,"20 days"); // add 20 days from passed date

echo "<br>".date_format($date,"d-m-Y");


date_modify($date,"-20 days"); // subtract 20 days from passed date

echo "<br>".date_format($date,"d-m-Y");


?>