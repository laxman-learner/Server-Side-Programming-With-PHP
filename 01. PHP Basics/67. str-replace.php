<?php


$str = 'Hello World. The world is beautiful too!';

// str_replace(find,replace,array) --> case-sensitive function : 'find' in string is replaced by 'replace'

echo str_replace('world','earth',$str);

// more than one words can be replaced in following way

$find = ['Hello','world'];  // variable name can be used for this array
$replace = ['Hi','Earth'];   // variable name can be used for this array
echo "<br>".str_replace($find,$replace,$str);

// case-insensitive function exactly same as str_replace()

echo "<br>".str_ireplace('world','earth',$str);
echo "<br>".str_ireplace($find,$replace,$str);

// str_replace and str_ireplace() for arrays

// input array
$color = ["blue",'red','green','yellow'];
$array = str_replace('red','crimson',$color); // this returns array

//printing the array
echo "<pre>";
print_r($array);
echo "</pre>";

$array = str_ireplace('RED','crimson',$color); // this returns array

//printing the array
echo "<pre>";
print_r($array);
echo "</pre>";

/* substr_replace(string,replacement,start,length) --> replaces the substring.'start' 
is the position of string from where replacement takes place last parameter is optional 
and by default replaces string from 'start' position to the last with 'replacement' string
 */


$string = 'Hello World. The world is beautiful too!';
echo "length of string is : ".strlen($string);
echo "<br>".$string;

 echo "<br>".substr_replace($string,'earth',0); // return the string that is replaced earth
 echo "<br>".substr_replace($string,'earth',6); // return string where character from position 6 to last are repalced with earth
 echo "<br>".substr_replace($string,'earth',17);
 echo "<br>".substr_replace($string,'earth',-10);

 echo "<br>".substr_replace($string,'earth',0,0);  // insert 'earth' at start
 echo "<br>".substr_replace($string,'earth',-1,-1); // insert 'earth' at last
 echo "<br>".substr_replace($string,'earth',10,20);
 echo "<br>".substr_replace($string,'earth',10,30);
 echo "<br>".substr_replace($string,'earth',10,-5); // replaces string from position 10 to -5 with 'earth'

 // strtr(string,from,to) --> for replacing one more character

 echo "<br>".strtr($string,'eo','ia');
  // every occurance of 'e' and 'o' will be replaced by 'i' and 'a' respectively

 //to replace more than one words we need to make the associative array

 $array = ["Hello"=>"Hi","World"=>"earth"];

 echo "<br>".strtr($string,$array); // case-sensitive



?>