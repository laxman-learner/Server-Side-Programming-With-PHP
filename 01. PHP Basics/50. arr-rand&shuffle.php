<?php

/* array_rand(array,number) -> this function is used to pick up the  random data from the array. First parameter 
represents the array name whereas second one denotes the number of elements to be picked up and it is by default
one. Actually it returns array of index or key of size equal to the number of elements picked up...
shuffle(array) -> is used to change the position of array elements and doesn't return array 
but shuffle the existing array on every refresh of browser
  */

// array_rand() for indexed array

$a =['red','blue','green','cyan','aqua'];
$newArray = array_rand($a);  // this returns the index of random element of array on every refresh of browser
echo "<pre>";
print_r($newArray);  
echo "</pre>";

// to display the element whose index is returned by array_rand()

echo $a[$newArray];

$newArray = array_rand($a,2);  // this returns the index of two random element of array on every refresh of browser
echo "<pre>";
print_r($newArray);  
echo "</pre>";

// to display the element whose index is returned by array_rand()

echo $a[$newArray[0]]."<br>";
echo $a[$newArray[1]];

// array_rand() for associative array

$a =['a'=>'red','b'=>'blue','c'=>'green','d'=>'cyan','e'=>'aqua'];
$newArray = array_rand($a);  // this returns the key of random element of array on every refresh of browser
echo "<pre>";
print_r($newArray);  
echo "</pre>";

// to display the element whose key is returned by array_rand()

echo $a[$newArray];

$newArray = array_rand($a,2);  /*this returns the array key of two random element of 
 array on every refresh of browser */
echo "<pre>";
print_r($newArray);  
echo "</pre>";

// to display the element whose key is returned by array_rand 

echo $a[$newArray[0]]."<br>";
echo $a[$newArray[1]];

//suffle() for indexed arrays

$a =['red','blue','green','cyan','aqua'];
shuffle($a);  
echo "<pre>";
print_r($a);  
echo "</pre>";

////suffle() for indexed arrays

$a =['a'=>'red','b'=>'blue','c'=>'green','d'=>'cyan','e'=>'aqua'];

shuffle($a);  
echo "<pre>";
print_r($a);  
echo "</pre>";
?>