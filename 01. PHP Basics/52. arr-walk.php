<?php

/*
array_walk() and array_walk_recursive() in php : these function have same functioality but supports user-defined 
function as second parameter

array_walk(array, function,parameter) --> work properly for indexed arrays and indexed arrays .. Here parameter 
is the any value except the key and value of the array
*/
// indexed array
$a =['red','violet', 'green','indigo','crimson'];
function myFun($value,$index,$param)

 /* value and index of every element of indexed array are passed as arguments 
during the call of this function inside the array_walk() */

{
    echo $index. " $param  $value <br>";
}
array_walk($a,"myFun","is index of");

echo "<br>";

// associative arrays

$a =['a'=>'red','b'=>'violet', 'c'=>'green','d'=>'indigo','e'=>'crimson'];

function myFunction($value,$key,$param)

 /* value and key of every element of indexed array are passed as arguments 
during the call of this function inside the array_walk() */

{
    echo $key. " $param  $value <br>";
}
array_walk($a,"myFunction","is a key of");

echo "<br>";

// array_walk_recursive() for multidimensional associative array

$veggie = ['1'=>"carrot",'2'=>"Tomatoes"];

$fruits = [ $veggie,
     "a" => "Lemon",
     "b" => "Orange",
     "c" => "Banana",
     "d" => "Apple"
];

array_walk_recursive($fruits,"myFunction","is a key of");

?>