<?php
function display($number)
{
    if($number <= 10){
        echo $number."<br>";
        display($number + 1);
    }
}
display(4);
// recursive function for calculating factorial of any number
 function factorial($num){
     if($num == 0)
     return 1;
     else return $num * factorial($num - 1);
 }
 echo factorial(5);
?>