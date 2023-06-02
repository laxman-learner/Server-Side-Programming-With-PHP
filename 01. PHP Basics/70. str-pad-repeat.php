<?php

// str_pad(string,length,pad_string,pad_type) here 'length' parameter should be greater than length of string

echo str_pad("Hello",10, ',',STR_PAD_RIGHT); // by default padding at right

echo "<br>".str_pad("Hello",15, '.$',STR_PAD_RIGHT);
echo "<br>".str_pad("Hello",15, '@',STR_PAD_LEFT); // padding takes place at left of string
echo "<br>".str_pad("Hello",25, '.',STR_PAD_BOTH);  // padding takes place at both side of  of string

// str_repeat(string,repeat) --> used to repeat particular string multiple times

echo "<br>".str_repeat("Hello",5); // 'Hello' repeats 5 times

echo "<br>".str_repeat("-Hello",5);
?>