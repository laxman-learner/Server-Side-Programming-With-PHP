<?php

/* compact() in php
This function is opposite of extract() function. It creates an associative array whose keys are variable 
names and their corresponding values are array values.
Syntax:
array compact("variable 1", "variable 2"...) */

$name = 'Hark Narayan';
$ID = "CS 205";
$age = 25;
$gender = 'male';

$newArr = compact('name','ID','age','gender');
// this function returns the associative array. Note: don't use $ sign before variable name just use them as string
// only use the defined variable inside the compact function

echo "<pre>";
print_r($newArr);
echo "</pre>";

// array can also be passed as the parameter inside the compact function

$religion = "Hindu";
$country =   "Nepal";
$extra = ['religion','country'];

$newArr = compact('name','ID','age','gender', $extra);


echo "<pre>";
print_r($newArr);
echo "</pre>";

?>