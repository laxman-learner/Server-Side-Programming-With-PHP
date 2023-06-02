<?php

/* array_column() is used to pick up the single column of multidimensional array and make the single associative
array   */
$array = [
 [
     'id' => 2200,
     'first_name' => 'Rameshwor',
     'last_name' => "Baraili"
 ],
 [
    'id' => 2201,
    'first_name' => 'Hardik',
    'last_name' => "Bhusal"
],
[
    'id' => 2202,
    'first_name' => 'Prem',
    'last_name' => "Pant"
]
];

// array_column();
$newArr = array_column($array,"first_name"); // this returns indexed array
echo "<pre>";
print_r($newArr);
echo "</pre>";

$newArr = array_column($array,"first_name",'id'); /* this returns associative array where third parameter is key 
and second parameter is value */
echo "<pre>";
print_r($newArr);
echo "</pre>";

// array_chunk(); used to group the elements to form the multidimensional array

$car = ["Volvo",'BMW',"Toyota", "Honda","Mercedes","Opel",'Bazaz'];
$newArr = array_chunk($car,2); // second parameter represents the number of elements
echo "<pre>";
print_r($newArr);
echo "</pre>";

// associative array

$age = [
    "Mohani" => 45,
    "Elon" => 60,
    "Silawati" => 67,
    "Shuvam" => 43,
    "Shanti" => 37,
];
$newArr = array_chunk($age,2); // second parameter represents the number of elements
echo "<pre>";
print_r($newArr);
echo "</pre>";

// to display the resultant array as associative array third parameter called 'preserve value' is used
$newArr = array_chunk($age,2,true); // false by default
echo "<pre>";
print_r($newArr);
echo "</pre>";
?>