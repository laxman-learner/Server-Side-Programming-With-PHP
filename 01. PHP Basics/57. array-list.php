<?php

 /* The list() function is used to assign values to a list of variables in one operation.
Note: Prior to PHP 7.1, this function only worked on numerical arrays.
this function can be used for indexed arrays and associative array with numeric key */

$color = ['red','brown', 'green','blue','crimson'];

// using list() for indexed array

list($a,$b,$c,$d,$e) = $color; // number of parameter is equal to the number of value to be stored
echo "value of  a : $a <br>";
echo "value of  b : $b <br>";
echo "value of  c : $c <br>";
echo "value of  d : $d <br>";
echo "value of  e : $e <br>";

echo "<br>";
$num = [34,85,20,94,23,80,98];
list($a,$b,$c,$d,$e) = $num;
echo "value of  a : $a <br>";
echo "value of  b : $b <br>";
echo "value of  c : $c <br>";
echo "value of  d : $d <br>";
echo "value of  e : $e <br>";

echo "<br>";
list($a,,,,$e) = $num;
echo "value of  a : $a <br>";
//echo "value of  b : $b <br>";
//echo "value of  c : $c <br>";
echo "value of  d : $d <br>";
echo "value of  e : $e <br>";

echo "<br>";
list($a,,,,$e) = $num;
echo "value of  a : $a <br>";
echo "value of  b : $b <br>";
echo "value of  c : $c <br>";
echo "value of  d : $d <br>";
echo "value of  e : $e <br>";

// array list() for associative array with numeric key

$colors = [0 => 'white' ,1 =>'red',2 =>'brown',3 => 'green',4 =>'blue',5 =>'crimson'];
// key should be start from 0 and should not be string

echo "<br>";
 list($a,$b,$c,$d,$e) = $colors;

 // displaying the elements:

 echo "value of  a : $a <br>";
echo "value of  b : $b <br>";
echo "value of  c : $c <br>";
echo "value of  d : $d <br>";
echo "value of  e : $e <br>";

 /*
  instead of using more than one variable in list() we use the one variable make it array as: 
 list($a[0],$a[1],$a[2],$a[3],$a[4]) = $colors;

 but this is producing error : Fatal error: Uncaught Error: Cannot use a scalar value as an array in 
 C:\xampp\htdocs\php-class\array-list.php:52 Stack trace: #0 {main} thrown in
  C:\xampp\htdocs\php-class\array-list.php on line 52 and
      array can be displayed as:
  
echo "value of  a : $a[0] <br>";
echo "value of  b : $a[1] <br>";
echo "value of  c : $a[2] <br>";
echo "value of  d : $a[3] <br>";
echo "value of  e : $a[4] <br>"; 
 */


?>