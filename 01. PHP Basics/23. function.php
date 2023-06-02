<?php
// simple function concept
function hello() /* function definition : syntax-> function functionName(){
    statement(s);
} */
{
    echo "Hello Everybody";
}
hello(); // function call :-> functionName();
/* php function with parameters:->> function functionName(parameter1,parameter2,....){
    statement(s);
}*/
function mul($a,$b){
    echo "<br>Product of ".$a. " and ".$b ." is ".$a * $b;
   }
 mul(10,20); //function call:syntax-> functionName(argument1,argument2,...)
 $x = 15;
 $y = 10;
  mul($x,$y);
  function user($fname,$lname,$age)
  {
      echo "<br>$fname $lname is ".$age." years old";
  }
  user("Laxman","Dhami",22); // argument are necessary
  // function with default parameters:
  function users($fname="Laxman",$lname="Dhami",$age=25)
  {
      echo "<br>$fname $lname is ".$age." years old";
  }
  users(); // arguments are optional
  users("Mahadev");
  users("","Bastola");
  users("","",26);
  users("Hemant","Regmi",30);
  users("","Dhanuk",90);
?>