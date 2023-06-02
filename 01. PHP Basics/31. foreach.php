<?php
//foreach loop is used with arrays
// foreach loop for indexed arrays:
$colors = [
    "red",
    "green",
    "blue"
];
foreach($colors as $value)
echo $value."<br>";
// foreach loop for associative arrays:
    $color = [
        1 =>"Orange",
        2 =>"Purple",
        3 => "violet"
    ];
    foreach($color as $value){
    echo $value."<br>";
    }
    echo "<ul>";
    foreach ($color as $key => $value){
        echo "<li> $key = $value </li>";
    }
echo "</ul>";
?>