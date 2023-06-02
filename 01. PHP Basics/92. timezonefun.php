<?php

// Time Zone Functions

// for setting and getting and getting timezones
date_default_timezone_set("Indian/Maldives");
echo date_default_timezone_get();

// alternative way to setting and getting the time zone

$tz = timezone_open("Asia/Kolkata");
echo "<br>".timezone_name_get($tz);


// to get the location of timezone
echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";

echo "<pre>";
print_r(timezone_identifiers_list()); // provide the associative array of timezone list
echo "</pre>";

echo "<pre>";
print_r(timezone_identifiers_list(1)); // provide the associative array of timezone list of Africa
echo "</pre>";

echo "<pre>";
print_r(timezone_identifiers_list(2)); // provide the associative array of timezone list of America
echo "</pre>";

/* timezone identifiers of various regions
 1      = Africa
 2      = America
 4      = Antarctica
 8      = Arctic 
 16     = Asia
 32     = Atlantic
 64     = Australia
 128    = Europe
 256    = Indian
 512    = Pacific
 1024   = UTC
 2047   = All
 4095   = ALL_WITH_BC
 4096   = PER_COUNTRY */
?>