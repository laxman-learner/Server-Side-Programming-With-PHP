<?php
// any of the comparision operator can be used with if statements
$a = 20;
$b = "20";
if($a == $b) /* the statements inside if block get executed iff condition in parenthesis
is  true */
{
    echo "a is equal to b <br>";
}
$b = 20;
if($a === $b){
    echo "a is equal to b and has same data type<br>";
}
$a = 10;
if($a < $b){
    echo "a is less than b <br>";
    $diff = $a - $b;
    echo "difference of a and b is ".$diff ."<br>";
}
// alternative way to use if statements
    $a = 30;
    if($a > $b):
        echo "a is greater than b <br>";
    endif;
echo "this is out of if statements";
?>