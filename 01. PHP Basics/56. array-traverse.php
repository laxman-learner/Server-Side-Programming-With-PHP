<?php

/*  array traversing functions : these functions are based on the internal pointer which points the initial value
of pointer when page loads */

$food = ['organge','banana','apple','grapes','mango','guava'];

echo current($food);  // current() returns value pointed by the internal pointer 

echo "<br>". key($food); 

 /*  this function returns the index of value pointed by the internal pointer for indexed 
arrays and  key for the associative arrays */

$foods = ['a' => 'organge','b' =>'banana','c' =>'apple','d' =>'grapes','e' =>'mango','f' =>'guava'];

echo "<br>". key($foods);

echo "<br>". current($foods); 

echo "<br>". pos($food);  // this is exactly same as the current()

next($food); // this function shift the internal pointer to the value that is one position rightto the currently pointed value 

echo "<br>". pos($food); 

next($foods); 

echo "<br>". pos($foods); 

next($food);
next($food);
next($food);
next($foods);
next($foods);
next($foods);

prev($food);
 // this function shift the internal pointer to the value that is one position left to the currently pointed value 

 echo "<br>". pos($food); 

 prev($foods);
 echo "<br>". pos($food); 

 end($food);
 // this function shift the internal pointer to the value that is at the end of the array

 echo "<br>". pos($food); 

 end($foods);
 echo "<br>". pos($foods); 

 $fruits = ['a' => 'organge','b' =>'banana','c' =>'apple','d' =>'grapes','e' =>'mango','f' =>'guava'];

 /* $newArray = each($fruits);  // this function returns key and value element array pointed by the internal array and  moves the 
   internal pointer forward   --> but not working in this case
 echo "<pre>";
  echo $newArray;
 echo "</pre>";
 */
  

 next($fruits);
 next($fruits);
 next($fruits);
 
 // php reset() function

 reset($foods);  // this function reset the internal pointer to initial value of the array
  
 echo '<br>'.current($foods)




?>