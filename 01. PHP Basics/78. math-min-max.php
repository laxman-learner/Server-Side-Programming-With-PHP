<?php

// min(value1,value2,....) and max(value1,value2,........) functions => requires at least two parameter
$value = max(56,89,22,97,209);
echo "Max is : ".$value;

$value = min(56,89,22,97,209);
echo "<br> Min is : ".$value;

// min() and max() for arrays

$val = min(array(56,89,22,97,209,23,18));
 
echo "<br> Min is : ".$val;


$val = max(array(56,89,22,97,209,23,18));
 
echo "<br> Max is : ".$val;

// for multiple arrays

$array = min(array(36,89,22,97,209,23,18),array(45,99,84,98,34)); 
 // compare every pair of elements from both array and returns array which has first smaller value than the second array

echo "<pre>";
print_r($array);
echo "</pre>";

$array = max(array(56,89,22,97,209,23,18),array(45,9,84,98,34));
 
echo "<pre>";
print_r($array);
echo "</pre>";

// min and max function for boolean value

$var = min(TRUE,FALSE); // true means 1 and false means 0
echo $var;

$var = max(TRUE,FALSE); // true means 1 and false means 0
echo $var;

$var = min(TRUE,0); // true means 1 and false means 0
echo "<br>".$var;

$var = max(1,FALSE); // true means 1 and false means 0
echo "<br>".$var;
?>