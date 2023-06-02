<?php

// addslashes()-> used to prevent from SQL injection and stripslashes() function in php

$str = 'Hello World " I am Virus"' ;
echo $str;
echo "<br>";
echo "<br>".addslashes("$str");  // add slashes when double quotes or single quote is reached in string
echo "<br>";
$str = " Hello World 'I am Trojan'";
echo "<br>";
echo $str; 
echo "<br>".addslashes("$str");  //used when saving data in databases
echo "<br>";
$newStr = addslashes($str);

echo "<br>";
echo "<br>".stripslashes("$newStr"); // removes slashes => used when retrieve from database and present to user

// addcslashes() function -> used to add slash anywhere in string

echo "<br>".addcslashes($str,'o'); // add slashes where 'o' is present in string
echo "<br>";

echo "<br>".addcslashes($str,'llo'); // add slashes where either 'l' or 'o' appears in string
echo "<br>";

echo "<br>". addcslashes($str,'A..Z'); // targets the uppercase letters in string and add slashes infront of them
echo "<br>";

echo "<br>". addcslashes($str,'a..z'); // targets the lowercase letters in string and add slashes infront of them
echo "<br>";

echo "<br>". addcslashes($str,'a..z'); // targets the lowercase letters in string and add slashes infront of them
echo "<br>";

echo "<br>". addcslashes($str,'a..g'); // targets the lowercase letters between a to g  in string and add slashes infront of them

echo "<br>";

$newStr = addcslashes($str,'lo');
echo $newStr;
echo "<br>";

echo "<br>".stripcslashes("$newStr");
?>