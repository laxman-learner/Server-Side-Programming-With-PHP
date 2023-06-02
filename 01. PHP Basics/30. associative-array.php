<?php
//associative array
$age = array(
    "bill" => 25, // key => value pair
    "steve" => 28,
    "elon" => 30
); /* numeric keys can also be used: for e.g. 1=> 25, 2 =>45 and so on
 mixed keys can also be used .
 displaying associative array */
 echo $age["bill"]."<br>";
 echo $age["steve"]."<br>";
 echo $age["elon"]."<br>";
 /* another way to define associative array was introduced in php 
 version 5.4 */
 $age =[
    "bill" => 25,
    "steve" => 28,
    "elon" => 30
];
// displaying associative array
 echo $age["bill"]."<br>";
 echo $age["steve"]."<br>";
 echo $age["elon"]."<br>";
 var_dump($age);
 echo "<pre>";
 print_r($age);
 echo "</pre>";
 // value of key in the associative array can be updated as 
 $age["bill"] = "twenty five";
 $age["steve"] = "twenty four";
 $age["elon"] = "twenty eight";
 echo $age["bill"]."<br>";
 echo $age["steve"]."<br>";
 echo $age["elon"]."<br>";
 var_dump($age);
?>