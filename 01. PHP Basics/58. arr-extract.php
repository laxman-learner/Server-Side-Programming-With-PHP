<?php

// extract() function converts array keys into variable names and array values into variable value
 

 $a = 'orange';
  
 $color = ['a'=>'red' , 'b'=>'yellow','c'=>'blue','d'=>'white','e'=>'cyan','f'=>'crimson'];

 extract($color); // basically one parameter is necessary in the extract function

 echo "value of a : $a <br>";
 echo "value of b : $b <br>";
 echo "value of c : $c <br>";
 echo "value of d : $d <br>";
 echo "value of e : $e <br>";
 echo "value of f : $f <br>";

  /* hen any of the key is already defined such as $a in this case  explicitly then second parameter comes 
 into picture called 'extract_rule' which is EXTR_OVERWRITE: This rule tells that if there is a collision, 
 overwrite the existing  variable. */
 
echo "<br>";
extract($color , EXTR_OVERWRITE);
echo "value of a : $a <br>";
 echo "value of b : $b <br>";
 echo "value of c : $c <br>";
 echo "value of d : $d <br>";
 echo "value of e : $e <br>";
 echo "value of f : $f <br>"; 

 // other other value of 'extract_rule' parameter are : 

 $b = 'orange';
  
 $colors = ['a'=>'red' , 'b'=>'yellow','c'=>'blue','d'=>'white','e'=>'cyan','f'=>'crimson'];


 extract($colors,EXTR_SKIP);         
 // EXTR_SKIP: This rule tells that if there is a collision, don’t overwrite the existing variable.

 echo "<br>";
 echo "value of a : $a <br>";
 echo "value of b : $b <br>";
 echo "value of c : $c <br>";
 echo "value of d : $d <br>";
 echo "value of e : $e <br>";
 echo "value of f : $f <br>";

 /* EXTR_PREFIX_SAME: This rule tells that if there is a collision then prefix the variable name according to 
 $prefix parameter.
 */

extract($colors,EXTR_PREFIX_SAME,'test'); // here third parameter is prefix which is variable name
echo "<br>";
echo "value of a : $a <br>";
echo "value of b : $b <br>";              // prints the variable value i.e. orange in this case
echo "value of b : $test_b <br>";          // prints the prefix value i.e. array value i.e. 'yellow' in this case
echo "value of c : $c <br>";
echo "value of d : $d <br>";
echo "value of e : $e <br>";
echo "value of f : $f <br>";

// EXTR_PREFIX_ALL: This rule tells that prefix all variable names according to $prefix parameter.

extract($colors,EXTR_PREFIX_ALL,'test'); // here third parameter is prefix which is variable name
echo "<br>";
echo "value of a : $test_a <br>";  // syntax : $prefix_keyname
echo "value of b : $test_b <br>";              
echo "value of c : $test_c <br>";              
echo "value of d : $test_d <br>";
echo "value of e : $test_e <br>";
echo "value of f : $test_f <br>";


?>