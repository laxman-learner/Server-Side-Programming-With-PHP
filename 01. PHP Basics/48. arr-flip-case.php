<?php
/*
// array_flip() and array_change_key_case() in php :
 -> array_flip() is used to swap the key and value of every element of an associative array
 -> array_change_key_case() is used to change the lower case key to uppercase and vice-versa
*/
 $a = [
  'Laxsagar' => 54,
  'Humkum' => 84,
  'Narayan' => 45,
  'Yagya' => 83,
  'Simron' => 39
 ];
 $newArr = array_flip($a);
 echo "<pre>";
 print_r($newArr);
 echo "</pre>";

 // array_change_key_case() -> change the key to lower case by default

 $newArr = array_change_key_case($a, ); // second parameter is by default CASE_LOWER
 echo "<pre>";
 print_r($newArr);
 echo "</pre>";

 $newArr = array_change_key_case($a , CASE_UPPER);
 echo "<pre>";
 print_r($newArr);
 echo "</pre>";
?>