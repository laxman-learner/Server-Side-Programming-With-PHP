<?php

/* str_split() function:
This function basically splits the given string into smaller strings of length specified by the user and stores them in an array
 and returns the array.

Syntax: str_split(string,length);
 */

 $str = "Hello Welcome to this wonderful journey of Web";
 $arr = str_split($str,1); // length parameter is by default 1
 echo "<pre>";
 print_r($arr);
 echo "</pre>";

 $arr = str_split($str,3); // counts whitespace as character
 echo "<pre>";
 print_r($arr);
 echo "</pre>";

 /* The chunk_split() function is used to split a string into smaller chunks of a specific length.

Syntax: 

string chunk_split($string, $length, $end)
$string: This parameter specifies a string which is needed to be chunked.
$length: This parameter specifies an integer which specifies the chunk length. That is the length of the chunked parts.
$end: This parameter specifies the line ending sequence. i.e. what to add
 */

 $arr = chunk_split($str,5,"..."); // counts whitespace as character
 echo "<pre>";
 print_r($arr);
 echo "</pre>";

 
?>