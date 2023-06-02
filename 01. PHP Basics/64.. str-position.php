<?php

/* / string position functions:
strpos(string,find,start); --> returns the first position of first character of substring in string from left
strrpos(string,find,start); -->  returns the first position of first character of substring in string from right
stripos(string,find,start); --> similar to strpos() functio but it is case-insensitive
strripos(string,find,start); -->  similar to strrpos() functio but it is case-insensitive

third parameter is optional and indicates the position from which the search is to be performed by default
it's value is from left for strpos and stripos functions and from right for strrpos and strripos functions
 */
$string = "Hello world. world is beautiful in the world of hello country in World";
echo strlen($string);

echo  "<br>".strpos($string,'in');                   //32
echo "<br>".strpos($string,'hello');                  //48
echo "<br>".strpos($string,'Hello');                   //0
echo "<br>".strpos($string,'world');                   //6
echo "<br>".strpos($string,'World');                   //65
echo "<br>".strpos($string,'World',10);                  // 65
echo "<br>".strpos($string,'World',-10);                  // 65 --> in this case last character i.e. 'd' is at -1 position and so on


// third parameter can be similarly used for remaining following functions

echo  "<br>".strrpos($string,'in');                     //62
echo "<br>".strrpos($string,'hello');
echo "<br>".strrpos($string,'Hello');
echo "<br>".strrpos($string,'World');

echo  "<br>".stripos($string,'in');
echo "<br>".stripos($string,'hello');        // 0
echo "<br>".stripos($string,'Hello');        // 0


echo  "<br>".strripos($string,'in');
echo "<br>".strripos($string,'world');
echo "<br>".strripos($string,'World');





?>