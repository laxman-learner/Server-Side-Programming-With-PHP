<?php

// trim() function in php => mainly used in forms for ignoring whitespaces in usernames

$str = "Hello World"; // trim means deleting certain character. by default trim() performs trimming from both sides
echo trim($str,'d');

echo "<br>".trim('wow yellow' ,'wow');

echo "<br>".rtrim('wow yellow' ,'w'); // trimming occur from right only

echo "<br>".chop('wow yellow' ,'w');  // exactly same as rtrim()

echo "<br>".ltrim('wow yellow' ,'w');

$str = "  Hello World  ";
echo "<br>".$str;
echo "<br>".trim($str,' ');




?>