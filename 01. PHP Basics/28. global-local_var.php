<?php
//local and global variables in php
function test()
{
    $x = 10;
    echo "value of x inside function : $x";
}
test();
/* echo "value of x outside function : $x"; is not valid as x is local 
variable */
$y = 20;
$z = 30;
/* These variable cannot be used directly inside any function although
they are defined outside the function as given below: 
 function test1()
 {
     echo $y;
 }
  for using those variables inside any function locally we need to declare them as global
 using global keyword before them. Using global keyword any number of variables can be 
 declared as global and can be accessed globally 
 */
function test2()
 {
    global $y,$z;
     echo "<br>".$y + $z;
 }
test2();
?>