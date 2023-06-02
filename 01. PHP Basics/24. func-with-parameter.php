<?php
function testing($string) // passing arguments by value
{
 $string .= "something extra";
}
$str = "This is string";
testing($str);
echo $str;
function concat(&$string) // passing arguments by reference
{
 $string .= " something extra";
}
$str = "This is string";
concat($str);
echo"<br>".$str;

// another function for pass by value and pass by reference
function first($num){
    $num += 10;
}
$number = 10;
first($number);
echo "<br>".$number;
function second(&$num){
    $num += 10;
}
second($number);
echo "<br>".$number;
?>