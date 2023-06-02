<?php

/* array_fill() and array_fill_keys() functions in php :
array_fill(start_index,number,value) --> this function does not require existing array but creates new array and 
returns the filled array. Here first parameter denotes the start index of array , second denotes the number of 
elements to be filled , and last parameter represents the fixed value to be filled.. 

array_fill_keys(array,value) --> requires the arrays of keys and returns the array whose keys are array of 
keys passed as the first parameter and value will be the fixed value as passed in second parameter. this function
takes indexed array as input and returns the associative array as output
 */

 // array_fill_keys()
 $a =['a','b','c','d','e'];
 $newArr = array_fill_keys($a,'alphabet');
 echo "<pre>";
 print_r($newArr);
 echo "</pre>";

 // array_fill()

 $newArr = array_fill(0,5,'Hello'); /* this will create the array index starting from 0 and will contain 5 
 elements and values of every element will be 'Hello'  */
 echo "<pre>";
 print_r($newArr);
 echo "</pre>";

 $newArr = array_fill(2,5,'Hello'); 
 /* this will create the array index starting from 2 and will contain 5 
 elements and values of every element will be 'Hello'  */
 echo "<pre>";
 print_r($newArr);
 echo "</pre>";

 $newArr = array_fill(-2,5,'Hello'); 
 /* this will create the array index starting from -2  and  will contain 5 
 elements and values of every element will be 'Hello'  */
 echo "<pre>";
 print_r($newArr);
 echo "</pre>";
 
?>