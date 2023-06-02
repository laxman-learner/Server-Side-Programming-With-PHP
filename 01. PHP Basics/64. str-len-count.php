<?php


$str = "Web Development community";
echo strlen($str); // returns no of character including white space in any string

echo "<br>".str_word_count($str); // returns no of words

echo "<br>".str_word_count($str,0);  // returns the number of words

//second parameter is optional and can take value either 0 or 1 or 2

$array = str_word_count($str,1);  // returns the array of words with index
echo "<pre>";
print_r($array);
echo "</pre>";

$array = str_word_count($str,2); // returns the array of words with index that represents the starting position of word
echo "<pre>";
print_r($array);
echo "</pre>";

// substr_count() --> to find how many times particular word or substring is repitited in any string

$string = "Hello world. world is beautiful in the world of hello country in World";
echo substr_count($string,'world');

/* this function can take additional two parameters called 'start' and 'length'... 'start' indicates the position from where
substring is to be searched in the given string and by default substring is searched from the starting. 'length' parameter indicates 
position upto which substrting is to be searched 
 */

echo "<br>".substr_count($string,'world',10);  // Note: substr_count() is case sensitive 
echo "<br>".substr_count($string,'world',15);  // search the 'world' from 15th position from left to the end of the string
echo "<br>".substr_count($string,'world',15,20); // search the 'world' from 15th to 20th position

echo "<br>".substr_count($string,'World',20);
?>