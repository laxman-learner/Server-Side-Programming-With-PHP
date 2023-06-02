 <?php

/* explode() and implode() in php : 
explode() is a built in function in PHP used to split a string in different strings. The explode() function
 splits a string based on a string delimiter, i.e. it splits the string wherever the delimiter character occurs.
  This functions returns an array containing the strings formed by splitting the original string.

Syntax :

array explode(separator, OriginalString, NoOfElements)
 */

 $str = "Hello world. It's a beautiful day";
 $array = explode(" ",$str); 

  /* here first parameter is white space. This means whenever 'whitespace' is encountered in the input
 string , the string will be splitted into elements of the array and similar for other value for first parameter
 */

 echo "<pre>";
 print_r($array);
 echo "</pre>";

 $array = explode(".",$str);    /* here first parameter is '.' i.e. This means whenever 'dot' is encountered in the input
 string , the string will be splitted into elements of the array and similar for other value for first parameter
 */
echo '<br>';
 echo "<pre>";
 print_r($array);
 echo "</pre>";

 $array = explode(" ",$str,3); // third parameter represents the no of index which may be positive negative or zero

 echo '<br>';
 echo "<pre>";
 print_r($array);
 echo "</pre>";

 $array = explode(" ",$str,4); 

 echo '<br>';
 echo "<pre>";
 print_r($array);
 echo "</pre>";

 $array = explode(" ",$str,0); 

 echo '<br>';
 echo "<pre>";
 print_r($array);
 echo "</pre>";

 $array = explode(" ",$str,-1);  // here -1 indicates the last index hence it will return all indexes except the last

 echo '<br>';
 echo "<pre>";
 print_r($array);
 echo "</pre>";

 $array = explode(" ",$str,-3);  // here -3 indicates the third last index hence it will return all indexes except the last three

 echo '<br>';
 echo "<pre>";
 print_r($array);
 echo "</pre>";

 $str = 'red,blue,green,white,magenta';

 $array = explode(",",$str); 
 echo '<br>';
 echo "<pre>";
 print_r($array);
 echo "</pre>";

 /* The implode() is a builtin function in PHP and is used to join the elements of an array. implode() is an alias for PHP | join() 
 function and works exactly same as that of join() function. it converts array into string
 syntax : 
 string implode(separator,array) 

 first parameter is an optional parameter and is of string type. The values of the array will be join to form a string and will be 
 separated  by the separator parameter provided here. This is optional, if not provided the default
  is “” (i.e. an empty string).
  */
   
  $array = ['Hello','World !','This','is','Beautiful','Country'];
  $str = implode(" " , $array); // array will contain whitespace as separator
  echo $str;

  $str = implode("-" , $array); // array will contain '-' as separator
  echo "<br>".$str;

  $str = implode(" wow " , $array); // array will contain 'wow' as separator
  echo "<br>".$str;

  $str = implode("<br>" , $array); // array will contain '-' as separator
  echo "<br>".$str;

  // join()

  $str = join("<br>" , $array); // array will contain '-' as separator
  echo "<br>".$str;


?>