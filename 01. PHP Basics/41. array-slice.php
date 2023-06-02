<?php
 /* array_slice() function is used to pick up the one or more number of elements from the existing array
 and creates new array with its own index starting from zero.
 syntax: array_slice(array_name,start,length,preserve parameter); 'start' parameter can take the 
 value positive or negative and indicates begining of elements to be picked. positive means forward and index 
 starts from zero whereas negative index indicates that last element has 
 index -1 and it goes on decreasing for rest of the elements in backwards direction.
 'lenth' is the number of elements to be picked up. 'preserve parameter' is false by default and can take
  the value either true or false. true means elements of newly created array will have the index as same
   as they have in the original array. */

// array_slice() for indexed array
$colors = ['white', 'yellow', 'red','cyan','magenta','aqua'];
$newArr = array_slice($colors, 1,3); // here index 1 indicates yellow
echo "<pre>";
print_r($newArr);
echo "</pre>";
$newArr = array_slice($colors, -4,4); // here aqua has index -1 , magenta has -2 , cyan has -3 and so on
echo "<pre>";
print_r($newArr);
echo "</pre>";
//" preserve parameter" preserve the index number of picked elements 
$newArr = array_slice($colors,2 ,3,true); // here aqua has index -1 , magenta has -2 , cyan has -3 and so on
echo "<pre>";
print_r($newArr);
echo "</pre>";

$newArr = array_slice($colors, -3,3,true); // here aqua has index -1 , magenta has -2 , cyan has -3 and so on
echo "<pre>";
print_r($newArr);
echo "</pre>";
// array_slice() for associative array
$color = ['a'=>'white', 'b'=>'yellow', '42'=>'red','d'=>'cyan','78'=>'magenta','f'=>'aqua'];
$newArr = array_slice($color, 1,4); 
echo "<pre>";
print_r($newArr);
echo "</pre>";
$newArr = array_slice($color, 1,4,true); 
echo "<pre>";
print_r($newArr);
echo "</pre>";
$newArr = array_slice($color, -4,3); 
echo "<pre>";
print_r($newArr);
echo "</pre>";
$newArr = array_slice($color, -4,3,true); 
echo "<pre>";
print_r($newArr);
echo "</pre>";
// associative array with integer keys
$color = ['1'=>'white', '3'=>'yellow', '5'=>'red','10'=>'cyan','16'=>'magenta','25'=>'aqua'];
$newArr = array_slice($color, 1,4); 
echo "<pre>";
print_r($newArr);
echo "</pre>";
 $newArr = array_slice($color, 1,4,true); 
echo "<pre>";
print_r($newArr);
echo "</pre>";
$newArr = array_slice($color, -4,3); 
echo "<pre>";
print_r($newArr);
echo "</pre>";
$newArr = array_slice($color, -4,3,true); 
echo "<pre>";
print_r($newArr);
echo "</pre>";


?>