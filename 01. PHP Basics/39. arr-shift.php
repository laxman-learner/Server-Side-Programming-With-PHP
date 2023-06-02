<?php
 /* array_shift() and array_unshift() are used to target and the element at the first index i.e. 0 index.
these function remove and add the element at first index of specified array respectively */
$fruits = ['banana', 45 , 'mangoes', 'pea'];
echo "<pre>";
print_r($fruits);
echo "</pre>";
array_shift($fruits);
echo "<pre>";
print_r($fruits);
echo "<pre>";
array_unshift($fruits,"lemon");
echo "<pre>";
print_r($fruits);
echo "<pre>";
array_unshift($fruits,"apple" , 'orange');
echo "<pre>";
print_r($fruits);
echo "<pre>";
?>