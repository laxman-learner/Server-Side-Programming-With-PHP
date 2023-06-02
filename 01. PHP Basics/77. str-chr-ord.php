<?php

// chr() and ord() in php

$str = chr(65); // decimal value

echo $str;

$str = chr(97);

echo "<br>".$str;

$str = chr(0237); // octal value

echo "<br>".$str;

$str = chr(0x48);

echo "<br>".$str;


$str = ord("A");

echo "<br>".$str;

$str = ord("Apple"); //returns the ASCII value of first character of string

echo "<br>".$str;


?>