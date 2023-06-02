<?php
 /* array_push() and array_pop() targets the last elements of the array push add the element 
at last position while pop remove the last element */
$fruits = ['apple','mango','banana'];
echo "<pre>";
print_r($fruits);
echo "<pre>";
//array_pop(array_name);
array_pop($fruits); // deletes the last element
echo "<pre>";
print_r($fruits);
echo "<pre>";
//array_push(array_name,element(s)to be pushed separated by comma) -> adds at the last position
array_push($fruits,'guava');
echo "<pre>";
print_r($fruits);
echo "<pre>";
// multiple elements can be pushed using a single push()
array_push($fruits,'grapes','papaya','orange');
echo "<pre>";
print_r($fruits);
echo "<pre>";
?>