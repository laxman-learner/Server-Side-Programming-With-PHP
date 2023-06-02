<?php

// array_replace() and array_replace_recursive() function in php
// These function does not modify the existing array but create a new array
$fruits = ["orange", 'banana','apple','grapes'];
$vege  =  ['carrot', 'pea'];
$newArray = array_replace($fruits, $vege);
 echo "<pre>";
 print_r($newArray);
 echo "</pre>";
 $fruit = ["orange", 'banana','apple', 1=>'grapes'];
$veg  =  ['carrot', 'pea'];
$newArr = array_replace($fruit, $veg);
 echo "<pre>";
 print_r($newArr);
 echo "</pre>";
 $colors = ['red', 'green','blue'];
 $newArray = array_replace($fruits, $vege,$colors);
 echo "<pre>";
 print_r($newArray);
 echo "</pre>";
$place = ['mahendranagar','Pokhara','Muktinath','nepal'];
$code = ['a'=>'5025','b'=>'5020'];
$new = array_replace($place,$code);
echo "<pre>";
print_r($new);
echo "</pre>";
$places = ['mahendranagar','a'=>'Pokhara','Muktinath','nepal'];
$codes = ['a'=>'5025','b'=>'5020'];
$newary = array_replace($places,$codes);
echo "<pre>";
print_r($newary);
echo "</pre>";

//multidimensional array

$array1 = [
 'a' => ['red'],
 'b' => ['pink','magenta']
];
$array2 = [
    'a' => ['yellow'],
    'b' => ['black']
   ];
$newarray = array_replace_recursive($array1,$array2);
echo "<pre>";
print_r($newarray);
echo "</pre>";
?>