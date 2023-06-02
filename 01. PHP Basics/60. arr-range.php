<?php

/* The range() function is an inbuilt function in PHP which is used to create an array of elements of any kind such as integer, 
alphabets within a given range(from low to high) i.e, list’s first element is considered as low and last one is considered as high.

Syntax:

array range(low, high, step) */

// range() function for intergers
$newArray = range(1,10);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

// numbers in reverse order

$newArray = range(10,1);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

$newArray = range(0,50,5); // third parameter represents the increment

echo "<pre>";
print_r($newArray);
echo "</pre>";

// range() function for floats
$newArray = range(1.2,10.5);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

// range() for alphabets

$newArray = range('a','g');

echo "<br>";
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = range('a','o',3);

echo "<br>";
echo "<pre>";
print_r($newArray);
echo "</pre>";

// alphabets in reverse order can also be printed

$newArray = range('o','a',3);  // or without specifying the third parameter

echo "<br>";
echo "<pre>";
print_r($newArray);
echo "</pre>";

// array returned by range() can also be displayed by using foreach loop

foreach(range('d','o',2) as $letter) {
    echo $letter . "<br>";
}
?>