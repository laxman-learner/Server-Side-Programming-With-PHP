<?php

/* array_values() returns the indexed array that contain only the value of associative array
array_unique removes the duplicate values and give the unique value in associative array
 */

 $color = ["a" => 'red',"b" => 'green',"c" => 'red',"d" => 'yellow',"e" => 'magenta'];
 $newArr = array_values($color);
 echo "<pre>";
 print_r($newArr);
 echo "</pre>";

 $newArr = array_unique($color);
 echo "<pre>";
 print_r($newArr);
 echo "</pre>";
?>