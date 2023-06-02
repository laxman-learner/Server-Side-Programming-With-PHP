<?php

// string uppercase and lowercase functions in php
$str = "Hello developers";

// strtolower() -> converts every character of string to lowercase

$newStr = strtolower($str);
echo $newStr;

// strtoupper() --> converts every character of string to uppercase
$newStr = strtoupper($str);
echo '<br>'.$newStr;

// ucfirst() --> converts first character of string to uppercase
$newStr = ucfirst($str);
echo '<br>'.$newStr;

// ucwords() --> converts first character of every words of string to uppercase
$newStr = ucwords($str);
echo '<br>'.$newStr;

// lcfirst() --> converts first character of string to lowercase
$newStr = lcfirst($str);
echo '<br>'.$newStr;

?>