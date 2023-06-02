<?php
 /* array_reduce(array,function,initial) => this function takes array as first parameter , user-defined function
passed as the second parameter will take the every element of the array and performs some manipulation. third
parameter is optional and can be passed if the user-defined function requires some extra parameter. array_reduce 
function returns the single val */

$a = ['banana','apple','orange'];

function myFun($n,$m) /*  Here first parameter acts as the carry and hold the intermediate value whereas second 
parameter takes the every element from the array 
 */
{
    return $n . "-" . $m; // intially $m is empty and hence $n contain '-' only then $m runs for every element  
}

$new = array_reduce($a, 'myFun'); // or we can make the array and print using print_r();
echo $new;

// using third parameter as initial value


$new = array_reduce($a, 'myFun','mango'); 
// in this case $n contain 'mango' as initial value . we can also use integer or float as initial value
echo '<br>'.$new;

// using same function for integer indexed arrays

$arr = [2,4,6,8,10];
$new = array_reduce($arr, 'myFun');
echo '<br>'.$new;

// we can obtain any arithmetic operation of array by redefining function as 

function myFunction($a,$b)
{
    return $a + $b; /* this is similar to : $a = $a + $b; 
                                            return $a;   similarly for others
                                            */
}
$new = array_reduce($arr,'myFunction'); // this will return the sum of array elements

echo '<br>'.$new;

// returning the difference

function myDiff($a,$b)
{
    return $a - $b;
}
$new = array_reduce($arr,'myDiff'); // this will return the sum of array elements

echo '<br>'.$new;  // initially $a will contain 0 and hence (0-2-4-6-8-10) = -30

// returning the Product

function myProduct($a,$b)
{
    return $a * $b;
}
$new = array_reduce($arr,'myProduct'); // this will return the sum of array elements

echo '<br>'.$new;  // initially $a will contain 0 and hence (0*2*4*6*8*10) = 0

// to obtain the actual product we have to pass 1 as the initial value as third parameter

$new = array_reduce($arr,'myProduct',1); //initially $a will contain 1 and hence (1*2*4*6*8*10) = 3840
echo '<br>'.$new;
?>