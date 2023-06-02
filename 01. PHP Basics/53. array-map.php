<?php
/* array_map() in php : This function is similar to array_walk and array_walk_recursive function except:
 -> this function returns array 
 -> multiple arrays can be passed to this function
*/

$a = [1,2,3,4,5,6,7];
function square($n){
    return $n * $n;
}
$newArray = array_map('square',$a); /*  this take every element of the array and
    returns the array which contain square of every elements of array $a
 */
echo "<pre>";
print_r($newArray);
echo "</pre>";

// we can define function for two parameter and pass the two arrays in array_map() as follows

function equal($n,$m) // this consider every element of both array and pass to the $n and $m respectively
{
    return "$n for $m";
}

$colors = ['red','green','brown','orange','aqua','magenta'];

$newArray = array_map('equal',$a,$colors);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// multidimensional array can be obtained by defining the function as follows

function multi($n,$m) // this consider every element of both array and pass to the $n and $m respectively
{
    return [$n => $m];
}

$newArray = array_map('multi',$a,$colors);

echo "<pre>";
print_r($newArray);
echo "</pre>";

/*  if no any function is passed as the parameter to array_map() then it will return the multidimensional
 associative array by combining two arrays passed to it */

$newArray = array_map(null,$a,$colors);

echo "<pre>";
print_r($newArray);
echo "</pre>";

// array_map for associative array

$a = ['one'=>'Apple','two'=>'Banana','three'=>'Orange'];

function upper($n){
    return strtoupper($n); // this returns the uppercase of the value of array
}
$newArray = array_map('upper',$a);

echo "<pre>";
print_r($newArray);
echo "</pre>";
?>