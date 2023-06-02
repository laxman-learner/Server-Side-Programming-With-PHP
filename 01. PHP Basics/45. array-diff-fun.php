<?php
// php array diff functions are case sensitive and compare two or more than two arrays to return different element

$a1 = [
    'a' => 'red',
    'b' => 'green',
    'c' => 'blue',
    'd' => 'yellow'
];
$a2 = [
'a' => 'red',
'f' => 'green',
'd' => 'blue',
'g' => 'magenta'
];
$newArray = array_diff($a1,$a2); // returns the elements with differnt values in array $a1
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_diff_key($a1,$a2); // returns the elements with differnt keys in array $a1
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_diff_assoc($a1,$a2);
 // returns the elements with either differnt values or different keys in array $a1 and work with only associative array
echo "<pre>";
print_r($newArray);
echo "</pre>";

// user defined function for comparing keys
function Compare($a,$b){
    if($a === $b){
        return 0;
    }
    return($a > $b)? 1 : -1;
}

// user defined function for comparing values
function CompareValue($a,$b){
    if($a === $b){
        return 0;
    }
    return($a > $b)? 1 : -1;
}
$newArray = array_diff_uassoc($a1,$a2,"Compare"); // this is array_diff_assoc() with user defined function
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_udiff_assoc($a1,$a2,"Compare"); // this is array_diff_assoc() with user defined function
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_udiff($a1,$a2,"Compare"); // this is array_diff() with user defined function
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_diff_ukey($a1,$a2,"Compare"); // this is array_diff_key() with user defined function
echo "<pre>";
print_r($newArray);
echo "</pre>";

$newArray = array_udiff_uassoc($a1,$a2,"Compare","compareValue"); // this is array_diff_assoc() with user defined function
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>