<?php
// php array key functions
$color = ['red','green','blue','yellow'];
$newArr = array_keys($color);
echo "<pre>";
print_r($newArr);
echo "</pre>";

// array key functions are generally used with associative array
$colors = [
    'first' => 'red',
    'second' => 'green',
    'third' => 'blue',
    'fourth' => 'yellow',
    'fifth' => 'magenta'
];
$newArray = array_keys($colors);
echo "<pre>";
print_r($newArray);
echo "</pre>";
$newArray = array_key_first($colors); //returns first key of associative array -> introduced in php version 7.3.0
echo $newArray;
$newArray = array_key_last($colors); //returns last key of associative array -> introduced in php version 7.3.0
echo "<br>".$newArray;
$newArray = array_key_exists('fourth',$colors); // returns true if key exist in associative array
echo "<br>".$newArray;
$newArray = key_exists('fourth',$colors); /* alternative or shorthand to array_key_exists() -> introduced in php
 version 7.3.0 returns true if key exist in associative array */
echo "<br>".$newArray;
if(key_exists('forth',$colors)){
    echo "<br>Key exists!";
}
else {
    echo "<br>Key doesn't exist";
}
?>