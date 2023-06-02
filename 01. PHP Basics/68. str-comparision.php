<?php

// different comparision function in php

echo strcmp("Hello world","Hello world");  

/*  this function compares two string and returns either negative or positive
or zero value. zero means strings are equal. positive value means first string is greater than second. and negative
value means first string is less than second. Note: variable containing can also be passed as argument in strcmp()
function. This is case sensitive function 
 */

echo "<br>".strcmp("Hello world","Hello World");
echo "<br>".strcmp("Hello world","Hello world Man");

echo "<br>".strcasecmp("Hello world","Hello WORLD");  // this is similar to strcmp()  but is case insensitive

echo "<br>".strncmp("Hello World","Hello WORLD",7); // this is case sensitive function and compare first 7 character in both string

echo "<br>".strncmp("Hello World","Hello world",10); // third parameter must be zero or positive

echo "<br>".strncasecmp("Hello World","Hello WORLD",7); // this is case-insensitive function and compare first 10 character in both string

// strnatcmp() --> natural algorithm compare 

echo "<br>".strcmp("2hello world","10Hello world");
echo "<br>".strnatcmp("2hello world","10Hello world"); // case sensitive
echo "<br>".strnatcasecmp("2hello world","10Hello world"); // case insensitive

/*  substr_compare(string1,string2,start,length,case) -> used to compare substring of any two string. 'start' indicates the position
from where comparision takes place. 'length' parameter is optional and indicates position upto which comparision is to be carried out.
 by default it compares till the last of strings. last parameter is also optional which can take value either true or false. by default
 its value is false means case sensitive
 */
echo "<br>";
 echo "<br>".substr_compare("hello world!","world!",6);
 echo "<br>".substr_compare("hello world!","World!",6);
 echo "<br>".substr_compare("hello World!","World!",6);
 echo "<br>".substr_compare("hello World!","World!",0);

 echo "<br>";

 echo "<br>".substr_compare("hello world!","world!",0,3);
 echo "<br>".substr_compare("hello world!","d!",-2,2);

 echo "<br>".substr_compare("hello world!","WORLD!",6,3,TRUE);

// similar_text(str1,str2,percent) --> returns the number of character matched in  two string. Third parameter is optional

echo "<br>";
echo "<br>".similar_text("Hello WOrld","WOrld Hello");
echo "<br>".similar_text("Hello WOrld","Hello WOrld");

echo "<br>";
$percentage = similar_text("Hello WOrld","Hello WOrld",$per);  //returns the percentage of matched character
echo $percentage;







?>