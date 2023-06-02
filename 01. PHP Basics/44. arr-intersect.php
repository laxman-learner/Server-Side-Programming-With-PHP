<?php
// array intersect functions: two or more than two arrays can be compared with these functions and are case sensitive
$a1 = [
        'a' => 'red',
        'b' => 'green',
        'c' => 'blue',
        'd' => 'yellow'
];
$a2 = [
    'a' => 'red',
    'f' => 'green',
    'd' => 'blue'
];
$newArray = array_intersect($a1,$a2);
 // returns the elements with the same value but key is the key of the first array
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_intersect_key($a1,$a2);
 // returns the elements with the same key but value is the value of the first array
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_intersect_assoc($a1,$a2);
 // returns the elements with the same value and same key
echo "<pre>";
print_r($newArray);
echo "</pre>";

// array intersect function with user defined function
function compare($a,$b){
    if($a === $b){
        return 0;
    }
    return($a > $b)? 1 : -1;
}
function compareValue($a,$b){
    if($a === $b){
        return 0;
    }
    return($a > $b)? 1 : -1;
}
$newArray = array_intersect_uassoc($a1,$a2,"compare");
/* this function is similar to array_intersect_assoc() but uses user defined function
as the third parameter for comparision two arrays */
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_uintersect_assoc($a1,$a2,"compare");
//  this function performs same functionality as array_intersect_uassoc()
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_intersect_ukey($a1,$a2,"compare");
/* this function is similar to array_intersect_key() but uses user defined function
as the third parameter for comparision of keys in  two arrays */
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_uintersect($a1,$a2,"compare");
/* this function is similar to array_intersect() but uses user defined function
as the third parameter for comparision of values in  two arrays */
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_uintersect_uassoc($a1,$a2,"compare","compareValue");
/* this function is similar to array_intersect_assoc() and elements keys and values
but uses user defined function as the third parameter for comparision of keys and fourth parameter 
for comparision of value in  two arrays */
echo "<pre>";
print_r($newArray);
echo "</pre>";


?>